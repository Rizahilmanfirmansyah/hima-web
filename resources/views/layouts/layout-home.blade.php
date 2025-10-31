<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HIMATIF - Beranda</title>
    <link rel="stylesheet" href="{{ asset('web-user/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @livewireStyles
</head>
<style>
    /* Style global untuk gambar carousel */
    .carousel-img {
        object-fit: cover;
        height: 600px;
        /* default desktop */
    }

    /* Caption selalu center */
    .carousel-caption {
        bottom: 0;
        top: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.3);
        /* opsional: kasih overlay gelap biar teks jelas */
    }

    .carousel-caption h5,
    .carousel-caption p {
        color: #fff;
        text-shadow: 0px 2px 6px rgba(0, 0, 0, 0.8);
        /* biar lebih terbaca */
    }

    /* Responsive untuk mobile */
    @media (max-width: 768px) {
        .carousel-img {
            height: 300px;
        }

        .carousel-caption h5 {
            font-size: 1.2rem;
        }

        .carousel-caption p {
            font-size: 0.9rem;
        }
    }

    .carousel-item {
        transition: transform 1s ease-in-out, opacity 1s ease-in-out;
    }


    .carousel-caption {
        bottom: 50px;
        transform: translateY(20px);
    }

    /* .carousel-caption h5 {
        margin-bottom: -50px;
    } */

    .carousel-caption p {
        margin-bottom: -150px;
    }
</style>

<body class="d-flex flex-column min-vh-100" style="font-family: 'Poppins', sans-serif">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #000080">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/fotos/fotos/himatif.png') }}" alt="Logo HIMATIF" width="60"
                    height="60" class="rounded-circle me-2" />
                <strong>HIMATIF</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.home') ? 'active' : '' }}"
                            href="{{ route('user.home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.about') ? 'active' : '' }}"
                            href="{{ route('user.about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.kegiatan') ? 'active' : '' }}"
                            href="{{ route('user.kegiatan') }}">Kegiatan</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('pendaftaran.add') ? 'active' : '' }}"
                            href="{{ route('pendaftaran.add') }}">Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('user.kontak') ? 'active' : '' }}"
                            href="{{ route('user.kontak') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('assets/fotos/fotos/anggota.jpeg') }}" class="d-block w-100 carousel-img"
                    alt="Slide 1">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100 ">
                    <h5 class="fs-2 fw-bold">Selamat Datang di HIMATIF</h5>
                    <p class="lead">Organisasi mahasiswa Teknik Informatika Universitas Nasional PASIM</p>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/fotos/fotos/mabim2.jpg') }}" class="d-block w-100 carousel-img"
                    alt="Slide 2">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="fs-2 fw-bold">Selamat Datang di HIMATIF</h5>
                    <p class="lead">Organisasi mahasiswa Teknik Informatika Universitas Nasional PASIM</p>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/fotos/fotos/mabim3.jpg') }}" class="d-block w-100 carousel-img"
                    alt="Slide 3">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center h-100">
                    <h5 class="fs-2 fw-bold">Kegiatan Mahasiswa</h5>
                    <p class="lead">Berbagai program untuk pengembangan diri dan kreativitas</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>

        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
        </div>
    </div>

    <!-- Tambahkan CSS di <head> -->




    <div>
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer class="text-white text-center py-3 mt-auto" style="background-color: #000080">
        <div class="container">
            <p class="mb-0">&copy; 2025 HIMATIF. All rights reserved.</p>
        </div>
    </footer>
    @livewireScripts
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
