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

    <!-- Counter Section -->
    {{-- <div class="news-ticker" style="background-color: #000080">
        <span>📢 Pendaftaran Study Club sudah dibuka | 🎓 Seminar AI untuk Bisnis - 25 September 2025 | 🤝 Ayo gabung
            HIMATIF sekarang!</span>
    </div> --}}

    <!-- Hero Section -->
    <section class="text-center text-dark d-flex align-items-center bg-light" style="height: 300px">
        <div class="container mt-5">
            <h1 class="fw-bold">Selamat Datang di HIMATIF</h1>
            <h3 id="typing" style="color: #000080"></h3>
            <p class="lead">Wadah aspirasi, kreativitas, dan pengembangan diri mahasiswa Teknik Informatika Universitas
                Nasional Pasim.</p>
            <a href="{{ route('pendaftaran.add') }}" class="btn btn-primary px-4 mt-3 mb-3"
                style="background-color: #004aad">Gabung
                HIMATIF</a>
        </div>
    </section>

    <!-- Upcoming Event -->
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

    <!-- Value Proposition -->
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

    <!-- Quick Access -->
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
    </section>


    <!-- Footer -->

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Typing Effect -->
    <script>
        const text = ["Kolaborasi", "Inovasi", "Prestasi"];
        let i = 0,
            j = 0;
        const typing = document.getElementById("typing");

        function type() {
            if (j < text[i].length) {
                typing.innerHTML += text[i].charAt(j);
                j++;
                setTimeout(type, 150);
            } else {
                setTimeout(erase, 2000);
            }
        }

        function erase() {
            if (j > 0) {
                typing.innerHTML = text[i].substring(0, j - 1);
                j--;
                setTimeout(erase, 100);
            } else {
                i = (i + 1) % text.length;
                setTimeout(type, 500);
            }
        }

        type();
    </script>

</div>
