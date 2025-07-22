<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HIMATIF - Beranda</title>
    <link rel="stylesheet" href="{{ asset('web-user/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
</head>

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
                    <li class="nav-item"><a class="nav-link active" href="{{ route('user.home') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.about') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.kegiatan') }}">Kegiatan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pendaftaran.add') }}">Daftar</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('user.kontak') }}">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="text-center" style="height: 600px; color: aqua; background-color: #000080 ">
        <Container class="md-3">
            <div style="height: 300px;">
                <img src="{{ asset('assets/fotos/fotos/himatif.png') }}"
                    style="width: 200px; height: 200px; margin-top: 200px;" alt="">
                <p class="text-white text-center">
                    Himpunan Mahasiswa Teknik Informatika
                </p>
            </div>
        </Container>
    </div>
    {{-- 
    <!-- Hero Section -->
    <section class="py-5 text-center bg-light">
      <div class="container">
        <h1 class="display-5 fw-bold">Selamat Datang di HIMATIF</h1>
        <p class="lead">HIMATIF Himpunan Mahasiswa Teknik Informatika Universitas Nasional Pasim adalah organisasi kemahasiswaan yang menjadi wadah aspirasi, kreativitas, dan pengembangan diri mahasiswa Teknik Informatika.</p>
        <a href="daftar.html" class="btn btn-primary px-4 mt-3" style="background-color: #004aad">Daftar Sekarang</a>
      </div>
    </section>

    <!-- Program Section -->
    <section class="py-5 text-center">
      <div class="container">
        <h2 class="mb-4 text-primary">Program Kami</h2>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
              <div class="card-body">
                <h5 class="card-title">SEMINAR</h5>
                <p class="card-text">keterangan</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
              <div class="card-body">
                <h5 class="card-title">STUDY CLUB</h5>
                <p class="card-text">keterangan</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
              <div class="card-body">
                <h5 class="card-title">HIMATIF EDUKATIF</h5>
                <p class="card-text">keterangan</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <div>
        {{ $slot }}
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="mb-0">&copy; 2025 HIMATIF. All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>

   




</body>

</html>
