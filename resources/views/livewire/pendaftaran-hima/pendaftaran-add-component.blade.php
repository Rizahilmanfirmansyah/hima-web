<div>
    <section class="py-5">
        <div class="container">
            <h2 class="text-center text-primary mb-4">Hubungi Kami</h2>
            <p class="text-center mb-5">Silakan hubungi kami melalui formulir atau kontak di bawah ini jika ada
                pertanyaan mengenai HIMATIF.</p>

            <div class="row g-4">
                <!-- Formulir Kontak -->
                <div class="col-md-6">
                    @if (Session::has('notif'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ Session::get('notif') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form wire:submit.prevent="addPendaftaran">
                        <div class="mb-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" wire:model="nama">
                            @error('nama')
                                <span class="error">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Motivasi</label>
                            <input type="text" class="form-control" wire:model="motivasi">
                        </div>
                        {{-- <div class="form-group">
                            <label for="" class="form-label">Status Seleksi</label>
                            <input type="text" class="form-control" wire:model="status_seleksi">
                        </div> --}}
                        <div class="mb-3">
                            <label for="" class="form-label">Divisi Pilihan</label>
                            <select name="" class="form-control" id="" wire:model="divisi_pilihan">
                                <option value="" selected>Pilih Divisi</option>
                                @foreach ($divisi as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama_divisi }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Tanggal Daftar</label>
                            <input type="date" class="form-control" wire:model="tanggal_daftar">
                        </div>
                        <br>
                        <p class="form-group">
                            <button type="submit" class="btn btn-success">Add</button>
                        </p>
                    </form>
                </div>

                <!-- Informasi Kontak -->
                <div class="col-md-6">
                    <h5>Kontak Langsung</h5>
                    <ul class="list-unstyled">
                        <li><strong>Email:</strong> himatifunaspasim@gmail.com</li>
                        <li><strong>Alamat:</strong> Universitas Nasional Pasim Bandung, Jl. Dakota No.8A, Sukaraja,
                            Bandung, 40175</li>
                    </ul>

                    <h5 class="mt-4">Media Sosial</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://www.instagram.com/himatif.pasim?igsh=bTR1ODBkODA4dmI0" target="_blank"
                                class="text-decoration-none text-dark d-flex align-items-center"> <i
                                    class="bi bi-instagram fs-4 me-2"></i> @himatif_unaspasim </a>
                        </li>
                        <li>
                            <a href="https://vm.tiktok.com/ZSBJXbKmu/" target="_blank"
                                class="text-decoration-none text-dark d-flex align-items-center"> <i
                                    class="bi bi-tiktok fs-4 me-2"></i> @himatif_unaspasim </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


</div>
