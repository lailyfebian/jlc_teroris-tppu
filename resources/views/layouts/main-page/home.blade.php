@extends('layouts.generic')

@section('head')
    <title>Bimbel PTN Commander | Persiapan UTBK SNBT Terarah</title>
    <link rel="canonical" href="{{ url('/') }}" />
    <meta name="description"
        content="Bimbel PTN Commander membantu persiapan UTBK SNBT melalui kelas intensif, privat, online, karantina, try out, evaluasi, dan pendampingan mentor." />
    <meta name="keywords" content="Bimbel PTN Commander">
    <meta property="og:locale" content="id" />
    <meta property="og:title" content="Bimbel PTN Commander | Persiapan UTBK SNBT Terarah" />
    <meta property="og:description"
        content="Bimbel PTN Commander membantu persiapan UTBK SNBT melalui kelas intensif, privat, online, karantina, try out, evaluasi, dan pendampingan mentor." />
    <meta property="og:site_name" content="Bimbel PTN Commander" />
    <meta property="og:image" content="{{ asset('images/hero-2.webp') }}" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:type" content="image/webp" />
    <meta name="twitter:card" content="Bimbel Commander">
    <meta name="twitter:title" content="Bimbel PTN Commander | Persiapan UTBK SNBT Terarah">
    <meta name="twitter:description"
        content="Bimbel PTN Commander membantu persiapan UTBK SNBT melalui kelas intensif, privat, online, karantina, try out, evaluasi, dan pendampingan mentor.">
    <meta name="twitter:image" content="{{ asset('images/hero-2.webp') }}">
    <meta name="twitter:url" content="{{ url('/') }}">
@endsection

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="hero-title">
                        Bimbel <span>PTN</span> Terarah untuk Tembus <span>Kampus Impian</span>
                    </h1>
                    <p class="hero-description">
                        Persiapkan UTBK SNBT dan seleksi masuk PTN dengan strategi belajar yang lebih terukur.
                        <strong>Bimbel PTN Commander</strong> membantu siswa melalui kelas intensif, latihan soal, try out
                        berkala, pembahasan materi, dan evaluasi kemampuan agar setiap sesi belajar lebih fokus pada target.
                    </p>
                    <p>
                        Kenali kelemahan lebih awal, tingkatkan skor secara bertahap, dan hadapi seleksi PTN dengan
                        persiapan yang lebih matang
                    </p>
                    <div class="hero-action">
                        <a href="https://wa.bimbelptn.com/" class="hero-primary-btn">Daftar Sekarang</a>
                        {{-- <a href="https://wa.bimbelptn.com/" class="hero-secondary-btn">Konsultasi Gratis</a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-image d-block d-lg-none">
                        <img src="{{ asset('images/hero-2.webp') }}" alt="Hero Image Bimbel Commander">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-section">
        <div class="container">
            <div class="feature-wrapper">
                <div class="row g-0">
                    <div class="col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <div>
                                <p class="subtitle">Belajar Sesuai Target PTN</p>
                                <p>Fokuskan waktu belajar pada materi yang paling dibutuhkan untuk mengejar kampus impian.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="bi bi-bar-chart"></i>
                            </div>
                            <div>
                                <p class="subtitle">Pantau Kenaikan Skor</p>
                                <p>Try out rutin membantu siswa mengetahui perkembangan dan memperbaiki kelemahan lebih
                                    cepat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="bi bi-book"></i>
                            </div>
                            <div>
                                <p class="subtitle">Latihan Soal Lebih Relevan</p>
                                <p>Hadapi UTBK dengan latihan soal dan pembahasan yang mengikuti kebutuhan seleksi terbaru.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="feature-item feature-last">
                            <div class="feature-icon">
                                <i class="bi bi-person-check"></i>
                            </div>
                            <div>
                                <p class="subtitle">Dibimbing Sampai Siap</p>
                                <p>Mentor membantu menyusun strategi, menjaga konsistensi, dan mengevaluasi kesiapan sebelum
                                    ujian.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="{{ asset('images/about-image.webp') }}" alt="Image About Bimbel Commander"
                            class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about-content">
                        <h3 class="section-subtitle">
                            Kenapa Memilih Bimbel PTN Commander?
                        </h3>
                        <p class="section-description">
                            Persiapan masuk PTN membutuhkan strategi yang tepat, latihan konsisten, dan evaluasi yang jelas.
                            <strong>Bimbel PTN Commander</strong> membantu siswa mempersiapkan UTBK SNBT secara lebih
                            terarah melalui program belajar yang fokus pada peningkatan kemampuan dan skor.
                        </p>
                        <ul class="about-list">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Program belajar disusun sesuai target PTN dan jurusan yang ingin dicapai siswa
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Try out rutin membantu mengukur perkembangan skor dan menemukan materi yang masih perlu
                                diperkuat
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Latihan soal dan pembahasan difokuskan pada tipe soal yang relevan dengan UTBK SNBT
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                Mentor mendampingi proses belajar agar siswa tetap konsisten, disiplin, dan lebih siap
                                menghadapi seleksi
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantage-section py-5">
        <div class="container">
            <div class="advantage-heading">
                <h4>Fokus Persiapan Bimbel PTN Commander</h4>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon bg-navy">
                            <i class="bi bi-heart-pulse"></i>
                        </div>
                        <div class="advantage-content">
                            <p class="subtitle">Analisis Kemampuan</p>
                            <p>
                                Kenali kemampuan awal, materi yang sudah dikuasai, dan bagian yang masih perlu ditingkatkan
                                sebelum menentukan strategi belajar.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon bg-gold">
                            <i class="bi bi-clipboard-check"></i>
                        </div>
                        <div class="advantage-content">
                            <p class="subtitle">Try Out & Evaluasi</p>
                            <p>
                                Ukur kesiapan melalui try out berkala. Setiap hasil digunakan untuk memantau skor dan
                                menentukan fokus latihan berikutnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon bg-navy">
                            <i class="bi bi-book"></i>
                        </div>
                        <div class="advantage-content">
                            <p class="subtitle">Pendalaman Materi</p>
                            <p>
                                Perkuat konsep dan kemampuan mengerjakan soal UTBK SNBT melalui pembahasan materi yang
                                terstruktur dan latihan intensif.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="advantage-card">
                        <div class="advantage-icon bg-gold">
                            <i class="bi bi-lightbulb"></i>
                        </div>
                        <div class="advantage-content">
                            <p class="subtitle">Strategi Masuk PTN</p>
                            <p>
                                Dapatkan arahan dalam menentukan target kampus, pilihan jurusan, serta strategi belajar
                                sesuai kemampuan dan tujuan siswa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="information-section py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="information-content">
                        <h2>
                            Belajar Lebih Terarah, Target <span>PTN</span> Lebih Dekat
                        </h2>
                        <div class="information-divider"></div>
                        <p>
                            Persiapan masuk PTN tidak cukup hanya dengan belajar lebih lama. Siswa juga membutuhkan
                            strategi, evaluasi, dan pendampingan yang tepat.
                        </p>
                        <p>
                            Bersama <strong>Bimbel PTN Commander</strong>, setiap siswa dibantu memahami kemampuan awal,
                            menentukan prioritas belajar, memperkuat materi UTBK SNBT, serta meningkatkan performa melalui
                            latihan dan try out berkala.
                        </p>
                        <p>
                            Program dirancang agar proses belajar lebih fokus, progres lebih mudah dipantau, dan target
                            kampus impian terasa lebih realistis untuk dicapai.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="information-image">
                        <img src="{{ asset('images/information-section.webp') }}" alt="Commander">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-section py-5">
        <div class="container">
            <div class="product-heading">
                <h3>PROGRAM BIMBEL PTN COMMANDER</h3>
                <p>Pilih program belajar yang paling sesuai dengan kebutuhan, jadwal, dan target PTN Anda. Setiap program
                    dirancang untuk membantu siswa belajar lebih fokus, konsisten, dan terarah menghadapi UTBK SNBT.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/1.webp') }}" class="img-fluid"
                                alt="Program Intensif Class">
                        </div>
                        <div class="product-body">
                            <p class="product-title">Program Intensif Class</p>
                            <p>
                                Kelas intensif untuk siswa yang ingin mempercepat persiapan UTBK melalui pembelajaran
                                terjadwal, latihan soal, dan evaluasi rutin.
                            </p>
                            <a href="https://wa.bimbelptn.com/?kebutuhan=Intensif Class" class="btn-product">
                                Hubungi Admin
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/2.webp') }}" class="img-fluid" alt="Program Privat">
                        </div>
                        <div class="product-body">
                            <p class="product-title">Program Privat</p>
                            <p>
                                Belajar lebih personal dengan pendampingan yang menyesuaikan kemampuan, kelemahan, serta
                                target kampus dan jurusan siswa.
                            </p>
                            <a href="https://wa.bimbelptn.com/?kebutuhan=Privat" class="btn-product">
                                Hubungi Admin
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/3.webp') }}" class="img-fluid" alt="Online Class">
                        </div>
                        <div class="product-body">
                            <p class="product-title">Online Class</p>
                            <p>
                                Persiapan UTBK dari mana saja melalui kelas online interaktif, materi terstruktur, latihan
                                soal, dan pembahasan bersama mentor.
                            </p>
                            <a href="https://wa.bimbelptn.com/?kebutuhan=Online Class" class="btn-product">
                                Hubungi Admin
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{ asset('images/product/4.webp') }}" class="img-fluid" alt="Program Karantina">
                        </div>
                        <div class="product-body">
                            <p class="product-title">Program Karantina</p>
                            <p>
                                Program belajar intensif dalam lingkungan yang lebih fokus untuk membangun disiplin,
                                meningkatkan jam latihan, dan memaksimalkan persiapan sebelum seleksi.
                            </p>
                            <a href="https://wa.bimbelptn.com/?kebutuhan=Karantina" class="btn-product">
                                Hubungi Admin
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="why-us py-5">
        <div class="container">
            <div class="why-us-wrapper">
                <h4 class="why-us-title">
                    Keunggulan Bimbel PTN Commander
                </h4>
                <div class="row g-0">
                    <div class="col-lg col-md-4 col-12">
                        <div class="why-us-item">
                            <div class="why-us-icon">
                                <i class="bi bi-bullseye"></i>
                            </div>
                            <p class="subtitle">Target Belajar Lebih Terarah</p>
                            <p>
                                Siswa belajar berdasarkan target kampus, jurusan, dan kemampuan awal yang sudah dipetakan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-12">
                        <div class="why-us-item">
                            <div class="why-us-icon">
                                <i class="bi bi-person-workspace"></i>
                            </div>
                            <p class="subtitle">Mentor Berpengalaman</p>
                            <p>
                                Pendampingan dilakukan oleh pengajar yang memahami materi, pola soal, dan strategi seleksi
                                PTN.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-12">
                        <div class="why-us-item">
                            <div class="why-us-icon">
                                <i class="bi bi-journal-check"></i>
                            </div>
                            <p class="subtitle">Evaluasi Progres Rutin</p>
                            <p>
                                Perkembangan siswa dipantau melalui latihan, try out, dan evaluasi untuk menentukan fokus
                                belajar berikutnya.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-12">
                        <div class="why-us-item">
                            <div class="why-us-icon">
                                <i class="bi bi-easel2"></i>
                            </div>
                            <p class="subtitle">Metode Belajar Efektif</p>
                            <p>
                                Materi disampaikan dengan pendekatan yang terstruktur agar siswa lebih mudah memahami konsep
                                dan mengerjakan soal.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg col-md-4 col-12">
                        <div class="why-us-item border-0">
                            <div class="why-us-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <p class="subtitle">Program Berorientasi Hasil</p>
                            <p>
                                Setiap pembinaan diarahkan untuk meningkatkan kemampuan, skor, dan kesiapan menghadapi
                                seleksi masuk PTN.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="road-to-success py-5">
        <div class="container">
            <div class="road-header">
                <h5>Tahapan Persiapan Menuju PTN Impian</h5>
                <p>
                    Persiapan UTBK SNBT akan lebih efektif jika dilakukan dengan langkah yang jelas. Bimbel PTN Commander
                    membantu siswa mulai dari mengenali kemampuan awal hingga mengevaluasi kesiapan sebelum menghadapi
                    seleksi masuk perguruan tinggi negeri
                </p>
            </div>
            <div class="row g-0 align-items-start">
                <div class="col-12 col-lg">
                    <div class="road-item">
                        <div class="road-icon navy">
                            <i class="bi bi-journal-check"></i>
                        </div>
                        <span class="road-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        <p class="subtitle">1. Pemetaan Kemampuan Awal</p>
                        <p>
                            Siswa mengikuti evaluasi awal untuk mengetahui kemampuan, kelemahan, dan materi yang perlu
                            menjadi prioritas belajar
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="road-item">
                        <div class="road-icon gold">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <span class="road-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        <p class="subtitle">2. Penentuan Target PTN</p>
                        <p>
                            Target kampus dan jurusan ditentukan berdasarkan minat, kemampuan, serta hasil evaluasi agar
                            strategi belajar lebih realistis dan terarah
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="road-item">
                        <div class="road-icon navy">
                            <i class="bi bi-clipboard-data"></i>
                        </div>
                        <span class="road-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        <p class="subtitle">3. Program Belajar Terstruktur</p>
                        <p>
                            Materi UTBK SNBT dipelajari secara bertahap melalui kelas, latihan soal, pembahasan, dan
                            pendampingan mentor
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="road-item">
                        <div class="road-icon gold">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <span class="road-arrow">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        <p class="subtitle">4. Try Out & Evaluasi Skor</p>
                        <p>
                            Try out dilakukan secara rutin untuk mengukur progres, melihat perkembangan skor, dan menemukan
                            bagian yang masih perlu diperbaiki
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg">
                    <div class="road-item">
                        <div class="road-icon navy">
                            <i class="bi bi-trophy"></i>
                        </div>
                        <p class="subtitle">5. Siap Hadapi Seleksi PTN</p>
                        <p>
                            Hasil evaluasi digunakan untuk mematangkan strategi, memperkuat kesiapan, dan membantu siswa
                            menghadapi UTBK SNBT dengan lebih percaya diri
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="description-section py-5">
        <div class="container">
            <div class="description-wrapper">
                <div class="row align-items-center g-0">
                    <div class="col-lg-7">
                        <div class="description-content">
                            <h3>
                                Bingung Menentukan Strategi <span>Masuk PTN</span>
                            </h3>
                            <div class="description-divider"></div>
                            <p>
                                Setiap siswa punya kemampuan, target kampus, dan tantangan belajar yang berbeda. Karena itu,
                                persiapan UTBK SNBT sebaiknya tidak dilakukan dengan pola yang sama untuk semua orang.
                            </p>
                            <p>
                                Bersama <strong>Bimbel PTN Commander</strong>, siswa dapat mendiskusikan target PTN, pilihan
                                jurusan, hasil kemampuan awal, hingga strategi belajar yang paling sesuai. Mentor membantu
                                menyusun arah persiapan agar waktu belajar lebih fokus dan progres lebih mudah dipantau.
                            </p>
                            <p>
                                Mulai dari menentukan prioritas materi hingga mengevaluasi hasil try out, setiap langkah
                                diarahkan untuk membantu siswa menghadapi seleksi masuk PTN dengan persiapan yang lebih
                                matang.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="description-image">
                            <img src="{{ asset('images/description-section.webp') }}" class="img-fluid"
                                alt="Mengapa Persiapan Sejak Dini Penting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section pt-5">
        <div class="container">
            <div class="row align-items-start gy-5">

                <div class="col-lg-4">
                    <div class="faq-content">
                        <span class="faq-subtitle">
                            FAQ
                        </span>
                        <h4>
                            PERTANYAAN
                            <br>
                            YANG SERING DIAJUKAN
                        </h4>
                        <div class="faq-divider"></div>
                        <p>
                            Masih ragu memilih program persiapan masuk PTN? Berikut beberapa pertanyaan yang paling sering
                            diajukan mengenai <strong>Bimbel PTN Commander</strong>, sistem belajar, program, hingga
                            persiapan UTBK SNBT.
                        </p>
                        <div class="faq-contact">
                            <div class="faq-contact-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <div>
                                <h5 class="subtitle">Masih ada pertanyaan lain?</h5>

                                <p>
                                    Konsultasikan target kampus, pilihan program, jadwal kelas, atau kebutuhan persiapan
                                    UTBK Anda langsung bersama tim Commander.
                                </p>
                                <a href="https://wa.bimbelptn.com/" class="faq-button">
                                    Hubungi Kami
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="accordion faq-accordion" id="faqAccordion">
                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq1">
                                    Apakah Bimbel PTN Commander cocok untuk persiapan UTBK SNBT?
                                </button>
                            </p>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya. Program dirancang untuk membantu siswa mempersiapkan UTBK SNBT melalui pembelajaran
                                    terstruktur, latihan soal, try out berkala, pembahasan materi, serta evaluasi
                                    perkembangan belajar.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    Program apa saja yang tersedia?
                                </button>
                            </p>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Tersedia beberapa pilihan seperti <strong>Intensif Class, Privat Class, Online Class,
                                        dan Program Karantina</strong>. Siswa dapat memilih program berdasarkan kebutuhan
                                    belajar, jadwal, serta target persiapan masing-masing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Apakah siswa akan mendapatkan try out?
                                </button>
                            </p>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Ya. Try out dilakukan secara berkala untuk mengukur kemampuan, memantau perkembangan
                                    skor, serta mengetahui materi yang masih perlu diperkuat sebelum menghadapi seleksi PTN.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    Apakah bisa ikut bimbel secara online?
                                </button>
                            </p>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Bisa. <strong>Online Class Bimbel PTN</strong> Commander memungkinkan siswa mengikuti
                                    pembelajaran dari berbagai lokasi dengan materi terstruktur, latihan soal, pembahasan,
                                    dan pendampingan mentor.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <p class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    Bagaimana cara memilih program yang paling sesuai
                                </button>
                            </p>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Siswa dapat berkonsultasi terlebih dahulu mengenai target PTN, jurusan, kemampuan awal,
                                    jadwal, dan kebutuhan belajar. Tim Commander akan membantu mengarahkan pilihan program
                                    yang paling relevan.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section py-5">
        <div class="container">
            <div class="cta-wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="cta-content">
                            <div class="cta-icon">
                                <i class="bi bi-clipboard2-check"></i>
                            </div>
                            <div class="cta-text">
                                <h5>Siap Lebih Dekat ke PTN Impian?</h5>
                                <p>
                                    Mulai persiapan UTBK SNBT dengan strategi belajar yang lebih terarah bersama Bimbel PTN
                                    Commander
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-lg-end text-center">
                        <a href="https://wa.bimbelptn.com/" class="btn-cta">
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
