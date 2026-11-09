<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('images/logo-web.webp') }}" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logo-web.webp') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/logo-web.webp') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logo-web.webp') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logo-web.webp') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    @yield('head')
    <meta name="google-site-verification" content="nOV7EnfmhqIIw4_z0OW4egHS-yN6zpDiGmVLesFKvws" />
</head>

<body>
    <div id="app">
        <nav>
            @include('layouts.parts.header')
        </nav>
        <main class="pb-4">
            @yield('content')
        </main>

        @if ($page->title ?? '')
            <a href="https://wa.bimbelptn.com/?kebutuhan={{ $page->title ?? '' }}" class="whatsapp-sticky" target="_blank" aria-label="Chat WhatsApp">
                <span class="whatsapp-icon">
                    <i class="bi bi-whatsapp"></i>
                </span>
                <span class="whatsapp-text">
                    Chat Admin
                </span>
            </a>
        @else
            <a href="https://wa.lawfirm-jlc.com/?kebutuhan=Konsultasi Hukum"
               class="whatsapp-sticky"
               target="_blank"
               rel="noopener noreferrer"
               aria-label="Chat WhatsApp">

                <span class="whatsapp-icon">
                    <i class="bi bi-whatsapp"></i>
                </span>

                <span class="whatsapp-text">
                    Chat Konsultan
                </span>

            </a>
        @endif

        <footer>
            @include('layouts.parts.footer')
        </footer>
    </div>
    @stack('scripts')
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer>
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {

    const source = document.getElementById('gallerySource');
    const pagesContainer = document.getElementById('galleryPages');
    const pagination = document.getElementById('galleryPagination');
    const gallery = document.querySelector('.jlc-gallery-section');

    if (!source || !pagesContainer || !pagination || !gallery) {
        console.error('JLC Gallery: Elemen tidak ditemukan.');
        return;
    }

    const items = Array.from(source.querySelectorAll('.gallery-item'));

    let currentPage = 0;
    let totalPages = 0;
    let itemsPerPage = 8;
    let autoSlide = null;
    let isHovered = false;
    let isAnimating = false;

    // Touch swipe variables
    let touchStartX = 0;
    let touchStartY = 0;
    let touchEndX = 0;
    let touchEndY = 0;

    const mobileQuery = window.matchMedia('(max-width: 767px)');

    function updateDots() {
        const dots = pagination.querySelectorAll('.page-dot');

        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentPage);
        });
    }

    function showPage(index, direction = 1) {

        if (isAnimating || totalPages <= 1) return;

        const pages = Array.from(
            pagesContainer.querySelectorAll('.gallery-page')
        );

        const nextPage = (index + totalPages) % totalPages;

        if (nextPage === currentPage) return;

        isAnimating = true;

        const current = pages[currentPage];
        const next = pages[nextPage];

        const step = direction >= 0 ? 1 : -1;

        next.style.transform = `translateX(${step * 100}%)`;
        next.style.display = 'block';

        requestAnimationFrame(() => {
            requestAnimationFrame(() => {

                pagesContainer.classList.add('is-sliding');

                current.style.transform = `translateX(${-step * 100}%)`;
                next.style.transform = 'translateX(0)';
            });
        });

        currentPage = nextPage;
        updateDots();

        setTimeout(() => {

            pages.forEach((page, i) => {
                page.style.display = i === currentPage ? 'block' : 'none';
                page.style.transform = 'translateX(0)';
            });

            pagesContainer.classList.remove('is-sliding');
            isAnimating = false;

        }, 680);
    }

    function stopAutoSlide() {
        clearInterval(autoSlide);
        autoSlide = null;
    }

    function startAutoSlide() {

        stopAutoSlide();

        if (isHovered || totalPages <= 1) return;

        autoSlide = setInterval(() => {
            showPage(currentPage + 1, 1);
        }, 4000);
    }

    function buildGallery() {

        stopAutoSlide();
        isAnimating = false;

        itemsPerPage = mobileQuery.matches ? 6 : 8;

        pagesContainer.innerHTML = '';
        pagination.innerHTML = '';

        totalPages = Math.ceil(items.length / itemsPerPage);
        currentPage = 0;

        for (let i = 0; i < totalPages; i++) {

            const page = document.createElement('div');
            page.className = 'gallery-page';

            const grid = document.createElement('div');
            grid.className = 'gallery-grid';

            const start = i * itemsPerPage;
            const end = start + itemsPerPage;

            items.slice(start, end).forEach(item => {
                grid.appendChild(item);
            });

            page.appendChild(grid);
            pagesContainer.appendChild(page);

            const dot = document.createElement('button');

            dot.type = 'button';
            dot.className = 'page-dot';
            dot.setAttribute('aria-label', 'Halaman ' + (i + 1));

            dot.addEventListener('click', () => {

                if (isAnimating) return;

                const direction = i > currentPage ? 1 : -1;

                showPage(i, direction);
                startAutoSlide();

            });

            pagination.appendChild(dot);
        }

        const pages = pagesContainer.querySelectorAll('.gallery-page');

        pages.forEach((page, index) => {
            page.style.display = index === 0 ? 'block' : 'none';
            page.style.transform = 'translateX(0)';
        });

        updateDots();
        startAutoSlide();
    }

    // Mobile Touch Swipe
    pagesContainer.addEventListener('touchstart', function (e) {

        if (!mobileQuery.matches) return;

        touchStartX = e.changedTouches[0].screenX;
        touchStartY = e.changedTouches[0].screenY;

        stopAutoSlide();

    }, { passive: true });

    pagesContainer.addEventListener('touchend', function (e) {

        if (!mobileQuery.matches) return;

        touchEndX = e.changedTouches[0].screenX;
        touchEndY = e.changedTouches[0].screenY;

        const diffX = touchStartX - touchEndX;
        const diffY = touchStartY - touchEndY;

        // Deteksi swipe horizontal
        if (
            Math.abs(diffX) > 50 &&
            Math.abs(diffX) > Math.abs(diffY) &&
            !isAnimating
        ) {

            if (diffX > 0) {
                // Swipe kiri: halaman berikutnya
                showPage(currentPage + 1, 1);
            } else {
                // Swipe kanan: halaman sebelumnya
                showPage(currentPage - 1, -1);
            }
        }

        startAutoSlide();

    }, { passive: true });

    pagesContainer.addEventListener('touchcancel', function () {
        startAutoSlide();
    }, { passive: true });

    gallery.addEventListener('mouseenter', () => {
        isHovered = true;
        stopAutoSlide();
    });

    gallery.addEventListener('mouseleave', () => {
        isHovered = false;
        startAutoSlide();
    });

    if (mobileQuery.addEventListener) {
        mobileQuery.addEventListener('change', buildGallery);
    } else {
        mobileQuery.addListener(buildGallery);
    }

    buildGallery();

});
</script>

</html>
