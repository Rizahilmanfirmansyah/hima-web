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
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Nama</label>
                            <input type="text" class="form-control" wire:model="nama">
                            @error('nama')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="from-label">Motivasi</label>
                            <input type="text" class="form-control" wire:model="motivasi">
                            @error('motivasi')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Divisi Pilihan</label>
                            <select name="" class="form-control" id="" wire:model="divisi_pilihan">
                                <option value="#">Pilih Divisi</option>
                                @foreach ($divisi as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_divisi }}</option>
                                @endforeach
                            </select>
                            @error('divisi_pilihan')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="form-label">Tanggal Daftar</label>
                            <input type="date" class="form-control" wire:model="tanggal_daftar">
                            @error('tanggal_daftar')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="form-group mt-3">
                            <button type="submit" class="btn btn-success">Daftar</button>
                            <a href="{{ route('user.home') }}" class="btn btn-secondary">Kembali</a>
                            @error('sukses')
                                <span class="text-success">{{ $message }}</span>
                            @enderror
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
