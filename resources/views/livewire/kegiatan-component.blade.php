<div>
    <!-- Hero Section -->
    <section class="text-center text-dark d-flex align-items-center bg-light" style="height: 300px">
        <div class="container">
            <h1 class="fw-bold">Kegiatan HIMATIF</h1>
            <p class="lead">Rangkaian kegiatan pengembangan diri, teknologi, dan kebersamaan</p>
        </div>
    </section>

    <!-- Filter Tabs -->
    <livewire:kegiatan-filter />
    {{-- <div class="container my-5">
        <ul class="nav justify-content-center mb-4">
            <li class="nav-item"><a class="nav-link active" href="#">Semua</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Seminar</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pelatihan</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Lomba</a></li>
        </ul>

        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="card shadow-lg border-0 h-100">
                    <img src="{{ asset('assets/fotos/fotos/anggota.jpeg') }}" style=" height: 200px"
                        class="card-img-top" alt="Seminar AI">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Seminar AI 2024</h5>
                        <p class="card-text">Seminar membahas kecerdasan buatan dan penerapannya di dunia kerja.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card shadow-lg border-0 h-100">
                    <img src="{{ asset('assets/fotos/fotos/studyclub.jpg') }}" class="card-img-top" alt="Pelatihan Git">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Pelatihan Git</h5>
                        <p class="card-text">Belajar menggunakan Git untuk kolaborasi dalam pengembangan software.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="card shadow-lg border-0 h-100">
                    <img src="{{ asset('assets/fotos/fotos/mabim2.jpg') }}" style=" height: 200px" class="card-img-top"
                        alt="Lomba Coding">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Lomba Coding</h5>
                        <p class="card-text">Kompetisi pemrograman antar mahasiswa Teknik Informatika.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Counter Section -->
    <section class="bg-light py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="text-primary" id="counter1">0</h2>
                    <p>Seminar</p>
                </div>
                <div class="col-md-3">
                    <h2 class="text-success" id="counter2">0</h2>
                    <p>Pelatihan</p>
                </div>
                <div class="col-md-3">
                    <h2 class="text-warning" id="counter3">0</h2>
                    <p>Lomba</p>
                </div>
                <div class="col-md-3">
                    <h2 class="text-danger" id="counter4">0</h2>
                    <p>Kegiatan Sosial</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Foto -->
    <div class="">
        <section class="container my-5">
            <h2 class="text-center mb-4">Galeri Kegiatan</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                {{-- <div class="carousel-inner">
                    @foreach ($kegiatane as $item)
                      <div class="carousel-item active">
                        <img src="{{ asset('assets/fotos/fotos')}}/{{$item->foto}}" class="d-block w-100" alt="Foto 1">
                    </div>
                        
                    @endforeach
                </div> --}}
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </section>

    </div>





    <script>
        function counter(id, start, end, duration) {
            let obj = document.getElementById(id),
                current = start,
                range = end - start,
                increment = end > start ? 1 : -1,
                step = Math.abs(Math.floor(duration / range)),
                timer = setInterval(() => {
                    current += increment;
                    obj.textContent = current;
                    if (current == end) clearInterval(timer);
                }, step);
        }
        counter("counter1", 0, 12, 2000);
        counter("counter2", 0, 8, 2000);
        counter("counter3", 0, 5, 2000);
        counter("counter4", 0, 3, 2000);
    </script>

    <style>
        .card img {
            transition: transform 0.3s ease, filter 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.05);
            filter: brightness(90%);
        }
    </style>
    {{-- <div class="container py-5">
        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/fotos/fotos/anggota.jpeg') }}" style="height: 200px;" class="card-img-top" alt="Seminar AI" />
                    <div class="card-body">
                        <h5 class="card-title">Seminar AI 2024</h5>
                        <p class="card-text">Seminar membahas kecerdasan buatan dan penerapannya di dunia kerja.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/fotos/fotos/mabim3.jpg') }}" style="height: 200px;" class="card-img-top" alt="Pelatihan Git" />
                    <div class="card-body">
                        <h5 class="card-title">Pelatihan Git</h5>
                        <p class="card-text">Belajar menggunakan Git untuk kolaborasi dalam pengembangan software.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/fotos/fotos/mabim2.jpg') }}" style="height: 200px;" class="card-img-top" alt="Lomba Coding" />
                    <div class="card-body">
                        <h5 class="card-title">Lomba Coding</h5>
                        <p class="card-text">Kompetisi pemrograman antar mahasiswa Teknik Informatika.</p>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/fotos/fotos/seminar.JPG') }}" style="height: 200px;" class="card-img-top" alt="Pelatihan Git" />
                    <div class="card-body">
                        <h5 class="card-title">Pelatihan Git</h5>
                        <p class="card-text">Belajar menggunakan Git untuk kolaborasi dalam pengembangan software.</p>
                    </div>
                </div>
            </div>

            <!-- card 5 -->
            <div class="col-md-4"  data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/fotos/fotos/studyclub.jpg') }}" style="height: 200px;" class="card-img-top"
                        alt="Pelatihan Git" />
                    <div class="card-body">
                        <h5 class="card-title">Pelatihan Git</h5>
                        <p class="card-text">Belajar menggunakan Git untuk kolaborasi dalam pengembangan software.</p>
                    </div>
                </div>
            </div>

            <!-- card 6 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm h-100">
                    <img src="{{ asset('assets/fotos/fotos/mabim 4.jpg') }}" style="height: 200px;" class="card-img-top" alt="Pelatihan Git" />
                    <div class="card-body">
                        <h5 class="card-title">Pelatihan Git</h5>
                        <p class="card-text">Belajar menggunakan Git untuk kolaborasi dalam pengembangan software.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
