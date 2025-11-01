<div>
    <style>
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
                url('assets/img/bg-himatif.jpg') center/cover no-repeat;
            color: white;
            padding: 120px 20px;
        }

        /* Typing Effect */
        #typing {
            border-right: 2px solid white;
            white-space: nowrap;
            overflow: hidden;
            display: inline-block;
        }

        /* News Ticker */
        .news-ticker {
            background: #0d6efd;
            color: white;
            padding: 8px;
            font-weight: bold;
            overflow: hidden;
        }

        .news-ticker span {
            display: inline-block;
            animation: scroll 12s linear infinite;
        }

        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
    <div id="hero" class="position-relative text-center text-white"
        style="background: url('assets/fotos/fotos/IMG_1137.JPG') center/cover no-repeat; height: 80vh;">
        <div class="d-flex flex-column justify-content-center align-items-center h-100 bg-dark bg-opacity-50">
            <h1 class="display-4 fw-bold">HIMATIF</h1>
            <h2 class="lead">Himpunan Mahasiswa Teknik Informatika <br> Universitas Nasional PASIM</h2>
            {{-- <a href="#tentang" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a> --}}
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Kiri: Deskripsi HIMATIF -->
                <div class="col-md-5 mb-4 mb-md-0">
                    <h2 class="fw-bold mb-3 text-uppercase">"HIMATIF"</h2>
                    <p class="text-muted" style="text-align: justify;">
                        Himpunan Mahasiswa Teknik Informatika (HIMATIF) Universitas Nasional Pasim merupakan organisasi
                        kemahasiswaan di tingkat program studi yang berfungsi sebagai wadah bagi mahasiswa Teknik
                        Informatika untuk mengembangkan potensi akademik, kreativitas, serta profesionalisme di bidang
                        teknologi informasi. </p>
                    <a href="#" class="btn btn-primary rounded-pill px-4 py-2">Selengkapnya</a>
                </div>

                <!-- Kanan: 4 Fitur Utama -->
                <div class="col-md-6 mx-auto">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-start">
                                <i class="bi bi-globe fs-2 text-primary mb-2"></i>
                                <h6 class="fw-bold">Membangun Jaringan & Kolaborasi</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-start">
                                <i class="bi bi-person-badge fs-2 text-primary mb-2"></i>
                                <h6 class="fw-bold">Pengembangan Profesionalisme</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-start">
                                <i class="bi bi-book fs-2 text-primary mb-2"></i>
                                <h6 class="fw-bold">Berbagi Pengetahuan & Pengalaman</h6>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-start">
                                <i class="bi bi-diagram-3 fs-2 text-primary mb-2"></i>
                                <h6 class="fw-bold">Mengembangkan Proyek Bersama</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STRUKTUR INTI -->
    <section class="py-5 text-center shadow-sm">
        <div class="container">
            <h2 class="fw-bold mb-5">Pimpinan Himpunan Mahasiswa Teknik Informatika</h2>
            <div class="row justify-content-center">
                @foreach ($kh as $item)
                    <div class="col-md-3 col-md-3 mx-4 my-3" data-aos="fade-up" data-aos-delay="100">
                        <img src="{{ asset('assets/fotos/fotos') }}/{{ $item->foto }}"
                            class="rounded shadow w-100 mb-3" alt="Ketua">
                        <h5>{{ $item->nama }}</h5>
                        <p class="text-muted">{{$item->jabatan}} <br> Mahasiswa Teknik Informatika Periode 2024-2025</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-light py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-5">Anggota Kepengurusan Himpunan Mahasiswa Teknik Informatika</h2>
            <div class="row justify-content-center g-4">
                <div class="col-md-3">
                    <i class="bi bi-emoji-smile fs-1 text-primary mb-3"></i>
                    <h3 class="fw-bold counter" data-target="97">35</h3>
                    <p class="text-muted">Total Kepengurusan Aktif</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-journal-bookmark fs-1 text-primary mb-3"></i>
                    <h3 class="fw-bold counter" data-target="8">5</h3>
                    <p class="text-muted">Total Divisi</p>
                </div>
                <div class="col-md-3">
                    <i class="bi bi-headset fs-1 text-primary mb-3"></i>
                    <h3 class="fw-bold counter" data-target="400">40</h3>
                    <p class="text-muted">Anggota HIMATIF</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SOSIAL MEDIA -->
    <section class="position-relative text-center text-white"
        style="background: url('assets/fotos/fotos/IMG_1137.JPG') center/cover no-repeat; height: 60vh;">
        <div class="d-flex flex-column justify-content-center align-items-center h-100 bg-dark bg-opacity-50">
            <h2 class="fw-bold mb-4">Ikuti Kami di Media Sosial</h2>
            <div class="d-flex gap-4 fs-2">
                <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-white"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>

    <!-- BERITA -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Berita Terbaru HIMATIF</h2>
            <div class="row g-4">
                @foreach ($beritas as $berita)
                    <div class="col-md-4">
                        <div class="card shadow-sm border-0 h-100">
                            @php
                                $thumbnails = json_decode($berita->thumbnail, true);
                            @endphp
                            @if ($thumbnails)
                                @foreach ($thumbnails as $item)
                                    <img src="{{ asset('assets/fotos/fotos') }}/{{ $item }}"
                                        class="card-img-top h-50" alt="">
                                @endforeach
                            @else
                                <span class="text-gray-400 text-sm">-</span>
                            @endif
                            <div class="card-body">
                                <h6 class="fw-bold">{{ $berita->judul }}</h6>
                                <p class="text-muted small">{{ $berita->isi }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- Counter Section -->
    {{-- <div class="news-ticker" style="background-color: #000080">
        <span>📢 Pendaftaran Study Club sudah dibuka | 🎓 Seminar AI untuk Bisnis - 25 September 2025 | 🤝 Ayo gabung
            HIMATIF sekarang!</span>
    </div> --}}

    {{-- <section class="text-center text-dark d-flex align-items-center bg-light" style="height: 300px">
        <div class="container mt-5">
            <h1 class="fw-bold">Selamat Datang di Himpunan Teknik Informatika</h1>
            <h3 id="typing" style="color: #000080"></h3>
            <p class="lead">Wadah aspirasi, kreativitas, dan pengembangan diri mahasiswa <br> Teknik Informatika Universitas
                Nasional Pasim.</p>
            <a href="{{ route('pendaftaran.add') }}" class="btn btn-primary px-4 mt-3 mb-3"
                style="background-color: #004aad">Gabung
                HIMATIF</a>
        </div>
    </section>

    <section class="container my-5">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h5 class="card-title text-primary">Upcoming Event</h5>
                @foreach ($beritas as $item)
                    <p class="card-text"> {{ $item->judul}}<br>📅 {{$item->published_at}}</p>
                    <a href="{{ route('user.kegiatan')}}" class="btn btn-outline-primary">Lihat Detail</a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container text-center my-5">
        <h2 class="fw-bold mb-4">Kenapa Gabung HIMATIF?</h2>
        <div class="row">
            <div class="col-md-3">
                <i class="bi bi-lightbulb-fill fs-1 text-warning"></i>
                <h5>Kreativitas</h5>
            </div>
            <div class="col-md-3">
                <i class="bi bi-people-fill fs-1 text-success"></i>
                <h5>Kolaborasi</h5>
            </div>
            <div class="col-md-3">
                <i class="bi bi-book-fill fs-1 text-primary"></i>
                <h5>Edukasi</h5>
            </div>
            <div class="col-md-3">
                <i class="bi bi-trophy-fill fs-1 text-danger"></i>
                <h5>Prestasi</h5>
            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-pencil-square fs-2 text-primary"></i>
                        <h5 class="mt-2">Pendaftaran</h5>
                        <p>Daftar sebagai anggota HIMATIF sekarang.</p>
                        <a href="{{ route('pendaftaran.add') }}" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-calendar-event fs-2 text-success"></i>
                        <h5 class="mt-2">Agenda</h5>
                        <p>Lihat jadwal kegiatan HIMATIF terbaru sekarang.</p>
                        <a href="{{ route('user.kegiatan') }}" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <i class="bi bi-envelope-fill fs-2 text-danger"></i>
                        <h5 class="mt-2">Kontak</h5>
                        <p>Hubungi kami untuk informasi lebih lanjut.</p>
                        <a href="{{ route('user.about') }}" class="btn btn-danger">Hubungi</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}


    <!-- Footer -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Typing Effect -->
    <script>
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // semakin kecil, semakin cepat

        const animateCounter = (counter) => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const increment = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(() => animateCounter(counter), 30);
            } else {
                counter.innerText = target + (target >= 400 ? '++' : '');
            }
        };

        // Jalankan animasi saat section muncul di layar
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.querySelectorAll('.counter').forEach(animateCounter);
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        document.querySelectorAll('section').forEach(sec => {
            if (sec.querySelector('.counter')) observer.observe(sec);
        });
    </script>

</div>
