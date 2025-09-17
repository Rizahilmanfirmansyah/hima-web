  {{-- <style>
      body {
          font-family: "Poppins", sans-serif;
      }

      .anggota-img {
          width: 100px;
          height: 100px;
          object-fit: cover;
          border-radius: 10px;
          margin-bottom: 0.5rem;
      }

      .hero {
          background-image: url('/assets/img/anggota1.jpeg');
          background-size: cover;
          background-position: center;
          background-repeat: no-repeat;
          min-height: 500px;
          position: relative;
          z-index: 0;
          color: white;
      }

      .hero::before {
          content: '';
          position: absolute;
          width: 100%;
          height: 100%;
          background: rgba(0, 0, 0, 0.5);
      }

      .hero .container {
          position: relative;
          z-index: 1;
      }
  </style> --}}

  <!-- Visi Misi -->
  {{-- <header class="hero d-flex align-items-center">
      <div class="container position-relative z-1">
          <div class="row justify-content-between align-items-center">
              <div class="text-center">
                  <h1 class="display-4 fw-bold"> Visi Misi</h1>
              </div>
          </div>
      </div>
  </header> --}}

  <section class="py-5 bg-light">
      <div class="container">
          <h2 class="text-center text-primary mb-4">
              <i class="bi bi-eye-fill me-2 fs-3"></i>Visi
          </h2>
          <p class="text-center mx-auto" style="max-width: 800px">
              Membentuk mahasiswa yang berintelektual, bermoral, inovatif, dan bersimpati di lingkungan sosial yang
              mengacu
              kepada tri dharma perguruan tinggi AD-ART HIMATIF.
          </p>

          <h2 class="text-center text-primary mt-5 mb-3">
              <i class="bi bi-bullseye me-2 fs-3"></i>Misi
          </h2>
          <ul class="mx-auto" style="max-width: 800px">
              <li class="list-group-item">
                  <i class="bi bi-check2-square text-primary me-2"></i>
                  Menjadikan tri dharma perguruan tinggi sebagai pedoman untuk menjalankan kegiatan yang akan
                  dilaksanakan.
              </li>
              <li class="list-group-item">
                  <i class="bi bi-check2-square text-primary me-2"></i>
                  Membuat program kerja yang bermanfaat bagi internal dan eksternal untuk mahasiswa teknik informatika
                  (HIMATIF
                  UNAS PASIM).
              </li>
              <li class="list-group-item">
                  <i class="bi bi-check2-square text-primary me-2"></i>
                  Meningkatkan hard skill dan soft skill melalui program kerja yang efektif di HIMATIF UNAS PASIM.
              </li>
          </ul>
      </div>
  </section>

  <!-- Struktur Organisasi -->
  <section class="py-5">
      <div class="container">
          <h2 class="text-center text-primary mb-4">Struktur Pengurus</h2>

          <!-- Reusable Grid -->
          <div class="row g-4 justify-content-center">
              @foreach ($pengurus as $p)
                  <div class="col-6 col-md-4 col-lg-3 text-center" data-aos="fade-up">
                      <img src="{{ asset('assets/fotos/fotos') }}/{{ $p->foto }}" class="rounded img-fluid"
                          style="width: 140px; height: 140px; object-fit: cover" alt="Ketua" />
                      <h5 class="mt-2">{{ $p->nama }}</h5>
                      <h5 class="mt-2">{{ $p->jabatan }}</h5>
                      <p class="text-muted">{{ $p->divisi->nama_divisi }}</p>
                  </div>
              @endforeach
          </div>
      </div>
  </section>
  <script>
      AOS.init({
          duration: 800,
          once: true
      });
  </script>
