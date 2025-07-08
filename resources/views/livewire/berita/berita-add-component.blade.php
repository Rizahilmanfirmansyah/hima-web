<div>
    <div class="card" style="width: auto">
        <div class="card-body">
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form wire:submit.prevent="addBerita" enctype="multipart/form-data">

                {{-- Judul --}}
                <div class="form-group">
                    <label class="form-label"> Judul</label>
                    <input class="form-control" type="text" wire:model="judul" placeholder="Judul">
                    @error('judul')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Slug --}}
                <div class="form-group">
                    <label class="form-label">Slug</label>
                    <input class="form-control" type="text" wire:model="slug" placeholder="Slug">
                    @error('slug')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Isi --}}
                <div class="form-group">
                    <label class="form-label"> Isi Berita</label>
                    <textarea wire:model="isi" placeholder="Isi berita" class="form-control"></textarea>
                    @error('isi')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Foto / Thubnail --}}
                <div class="form-group">
                    <label class="form-label"> Upload Thumbnail (bisa lebih dari 1)</label>
                    <input class="form-control" type="file" wire:model="thumbnail" multiple>
                    @error('thumbnail')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror

                    @if ($thumbnail)
                        <div class="flex mt-2 gap-2">
                            @foreach ($thumbnail as $foto)
                                <img src="{{ $foto->temporaryUrl() }}" width="100">
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- Kategori --}}
                <div class="form-group">
                    <label class="form-label"> Kategori</label>
                    <input class="form-control" type="text" wire:model="kategori" placeholder="Kategori">
                    @error('kategori')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Penulis --}}
                <div class="form-group">
                    <label class="form-label"> Penulis</label>
                    <input class="form-control" type="text" wire:model="penulis" placeholder="Penulis">
                    @error('penulis')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Status --}}
                <div class="form-group">
                    <label class="form-label"> Status</label>
                    <select wire:model="status" class="form-control">
                        <option value="">-- Pilih Status --</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    @error('status')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                {{-- Published At --}}
                <div class="form-group">
                    <label class="form-label"> Tanggal Publikasi</label>
                    <input class="form-control" type="date" wire:model="published_at">
                    @error('published_at')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <p class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Berita</button>

                </p>


                {{-- Flash message --}}
                @if (session()->has('success'))
                    <div class="text-green-600 mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </form>

        </div>

    </div>


</div>
