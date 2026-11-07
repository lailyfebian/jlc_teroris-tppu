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
            <a href="https://wa.bimbelptn.com/" class="whatsapp-sticky" target="_blank" aria-label="Chat WhatsApp">
                <span class="whatsapp-icon">
                    <i class="bi bi-whatsapp"></i>
                </span>
                <span class="whatsapp-text">
                    Chat Admin
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
    const navbar = document.querySelector(".navbar-section");

    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) {
            navbar.classList.add("navbar-sticky");
        } else {
            navbar.classList.remove("navbar-sticky");
        }
    });
</script>

</html>
