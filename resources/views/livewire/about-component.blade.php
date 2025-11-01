  <div>
      <style>
          body {
              background-color: #ffffff;
              color: #333;
          }

          .logo-section img {
              width: 400px;
              max-width: 100%;
          }

          h2.section-title {
              font-weight: 700;
              text-align: center;
              margin-bottom: 20px;
          }

          .visi,
          .misi {
              background-color: #fff;
              padding: 30px;
              border-radius: 10px;
              box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
          }

          .tujuan-icon {
              font-size: 2rem;
              color: #3b82f6;
              margin-bottom: 10px;
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

      <div class="row justify-content-center py-3">
          <div class="col-md-5">
              <section class="logo-section text-center py-5">
                  <img src="{{ asset('assets/fotos/fotos/himatif.png') }}" style="width: 250px" alt="Logo HIMATIF">
                  <h1 class="mt-3 fw-bold text-primary"></h1>
                  <h3 class="text-danger fw-bold"></h3>
              </section>
          </div>

          <div class="col-md-5 py-5" >
              <section class="container text-center py-2">
                  <h2 class="section-title">HIMATIF</h2>
                  <p class="fs-5 text-secondary">
                      Himpunan Mahasiswa Teknik Informatika (HIMATIF) Universitas Nasional Pasim merupakan organisasi
                      kemahasiswaan di tingkat program studi yang berfungsi sebagai wadah bagi mahasiswa Teknik
                      Informatika untuk mengembangkan potensi akademik, kreativitas, serta profesionalisme di bidang
                      teknologi informasi.
                  </p>
              </section>
          </div>
      </div>


      <section class="container">
          <div class="row g-5">
              <div class="col-md-6">
                  <div class="visi h-100">
                      <h2 class="text-center fw-bold mb-3">VISI</h2>
                      <p class="text-justify text-secondary">
                          Mengembangkan Sumber Daya Manusia yang Beriman dan Bertakwa kepada Tuhan Yang Maha Esa dan
                          Berbudi Pekerti Luhur, Memiliki Pengetahuan dan Keterampilan, Kesehatan Jasmani dan Rohani
                          yang Mantap dan Mandiri serta Rasa Tanggung Jawab Kemasyarakatan dan Kebangsaan.
                      </p>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="misi h-100">
                      <h2 class="text-center fw-bold mb-3">MISI</h2>
                      <ul class="text-start text-secondary">
                          <li>Membangun Organisasi Program Studi yang Berorientasi Akademik dengan Pengembangan
                              Softskill yang Optimal.</li>
                          <li>Membangun Organisasi Program Studi dengan Pola Pengkaderan yang Jelas dan
                              Berkesinambungan.</li>
                          <li>Memberikan Pelayanan Kemahasiswaan yang Baik.</li>
                          <li>Mengadakan Pelatihan Keterampilan untuk Membentuk Mahasiswa yang Berkualitas.</li>
                          <li>Membangun Hubungan dan Kerjasama dengan Pihak Birokrasi.</li>
                          <li>Memperkenalkan Sistem Informasi ke Masyarakat Luas.</li>
                      </ul>
                  </div>
              </div>
          </div>
      </section>

      <section class="container py-5">
          <h2 class="section-title">TUJUAN</h2>
          <div class="row text-center g-4">
              <div class="col-md-6 col-lg-3">
                  <div class="p-3 border rounded h-100">
                      <i class="bi bi-globe fs-2 text-primary mb-2"></i>
                      <h5 class="fw-bold">Membangun Jaringan dan Kolaborasi</h5>
                      <p>Berfokus pada kegiatan kemahasiswaan yang membangun dan memajukan fakultas dan jurusan.</p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="p-3 border rounded h-100">
                      <i class="bi bi-person-badge fs-2 text-primary mb-2"></i>
                      <h5 class="fw-bold">Pengembangan Profesionalisme</h5>
                      <p>Mendorong pengembangan kemampuan akademik dan softskill mahasiswa agar menjadi profesional yang
                          kompeten.</p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="p-3 border rounded h-100">
                      <i class="bi bi-book fs-2 text-primary mb-2"></i>
                      <h5 class="fw-bold">Berbagi Pengetahuan dan Pengalaman</h5>
                      <p>Melalui seminar, workshop, dan pelatihan, HIMATIF mendorong pertukaran ilmu antar mahasiswa.
                      </p>
                  </div>
              </div>
              <div class="col-md-6 col-lg-3">
                  <div class="p-3 border rounded h-100">
                      <i class="bi bi-diagram-3 fs-2 text-primary mb-2"></i>
                      <h5 class="fw-bold">Mengembangkan Proyek Bersama</h5>
                      <p>Meningkatkan semangat kerja tim dengan mengembangkan proyek bersama antar mahasiswa.</p>
                  </div>
              </div>
          </div>
      </section>
    
      <section class="py-5">
          <div class="container">
              <h2 class="text-center text-primary mb-4">Struktur Pengurus</h2>

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

      <section class="bg-light py-5 text-center">
          <div class="container">
              <div class="row">
                  <div class="col-md-3 mb-4" data-aos="fade-up">
                      <h2 class="text-primary">24</h2>
                      <p>Anggota Aktif</p>
                  </div>
                  <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                      <h2 class="text-success">12</h2>
                      <p>Program Kerja</p>
                  </div>
                  <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <h2 class="text-warning">2</h2>
                      <p>Seminar</p>
                  </div>
                  <div class="col-md-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <h2 class="text-warning">2</h2>
                      <p>Workshop</p>
                  </div>
              </div>
          </div>
      </section>
  </div>
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

  {{-- <section class="py-5 bg-light">
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

  <section class="py-5">
      <div class="container">
          <h2 class="text-center text-primary mb-4">Struktur Pengurus</h2>

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
  </script> --}}
