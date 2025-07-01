   <!-- Konten Kontak -->
    <section class="py-5">
      <div class="container">
        <h2 class="text-center text-primary mb-4">Hubungi Kami</h2>
        <p class="text-center mb-5">Silakan hubungi kami melalui formulir atau kontak di bawah ini jika ada pertanyaan mengenai HIMATIF.</p>

        <div class="row g-4">
          <!-- Formulir Kontak -->
          <div class="col-md-6">
            <form wire:submit.prevent = "addContact">
              <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" wire:model="nama" required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email Aktif</label>
                <input type="email" class="form-control" id="email" wire:model="email" required />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" wire:model="pesan" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
          </div>

          <!-- Informasi Kontak -->
          <div class="col-md-6">
            <h5>Kontak Langsung</h5>
            <ul class="list-unstyled">
              <li><strong>Email:</strong> himatifunaspasim@gmail.com</li>
              <li><strong>Alamat:</strong> Universitas Nasional Pasim Bandung, Jl. Dakota No.8A, Sukaraja, Bandung, 40175</li>
            </ul>

            <h5 class="mt-4">Media Sosial</h5>
            <ul class="list-unstyled">
              <li>
                <a href="https://www.instagram.com/himatif.pasim?igsh=bTR1ODBkODA4dmI0" target="_blank" class="text-decoration-none text-dark d-flex align-items-center"> <i class="bi bi-instagram fs-4 me-2"></i> @himatif_unaspasim </a>
              </li>
              <li>
                <a href="https://vm.tiktok.com/ZSBJXbKmu/" target="_blank" class="text-decoration-none text-dark d-flex align-items-center"> <i class="bi bi-tiktok fs-4 me-2"></i> @himatif_unaspasim </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>