<!-- Visi Misi -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center text-primary mb-4">Visi</h2>
        <p class="text-center mx-auto" style="max-width: 800px">Membentuk mahasiswa yang berintelektual, bermoral,
            inovatif, dan bersimpati di lingkungan sosial yang mengacu kepada tri dharma perguruan tinggi AD-ART
            HIMATIF.</p>

        <h2 class="text-center text-primary mt-5 mb-3">Misi</h2>
        <ul class="list-group list-group-flush mx-auto" style="max-width: 800px">
            <li class="list-group-item">Menjadikan tri dharma perguruan tinggi sebagai pedoman untuk menjalankan kegiatan
                yang akan di laksanakan.</li>
            <li class="list-group-item">Membuat program kerja yang bermanfaat bagi internal dan eksternal untuk mahasiswa
                teknik informatika (HIMATIF UNAS PASIM).</li>
            <li class="list-group-item">Meningkatkan hard skill dan soft skill melalui program kerja yang efektif di
                HIMATIF UNAS PASIM.</li>
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
