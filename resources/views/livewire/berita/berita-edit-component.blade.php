<div>
    <div class="card" style="width: auto">
        <div class="card-body">
            <form wire:submit.prevent="updateBerita" enctype="multipart/form-data">
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
                    <textarea wire:model="isi" class="form-control" placeholder="Isi berita"></textarea>
                    @error('isi')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="" class="form-label"> Thumbnail</label>
                    <input type="file" class="form-control" wire:model="thumbnail" multiple>
                    @error('thumbnail.*')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    @if ($thumbnail)
                        <p class="mt-2 text-sm text-gray-600">Preview foto baru:</p>
                        <div class="flex gap-2">
                            @foreach ($thumbnail as $foto)
                                <img src="{{ $foto->temporaryUrl() }}" width="100">
                            @endforeach
                        </div>
                    @endif

                </div>

                <div class="form-group">
                    @if ($existingthumbnail)
                        <p class="mt-2 text-sm text-gray-600" class="form-label">Foto lama:</p>
                        <div class="flex gap-2">
                            @foreach ($existingthumbnail as $foto)
                                <img src="{{ asset('assets/fotos/fotos') }}/{{$foto}}" width="100">
                            @endforeach
                        </div>
                    @endif

                </div>
                {{-- Tampilkan foto lama --}}

                <div class="form-group">
                    <label for="" class="form-label">Kategori</label>
                    <input type="text" wire:model="kategori" class="form-control" placeholder="Kategori">
                    @error('kategori')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="" class="form-label">Penulis</label>
                    <input type="text" wire:model="penulis" class="form-control" placeholder="Penulis">
                    @error('penulis')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="" class="form-label">Status</label>
                    <select wire:model="status" class="form-control">
                        <option value="">-- Pilih Status --</option>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                    @error('status')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="" class="from-label"> Tanggal Publis</label>
                    <input type="date" wire:model="published_at" class="forn-control">
                    @error('published_at')
                        <span class="text-red-600">{{ $message }}</span>
                    @enderror
                    <p class="form-group">
                        <button type="submit" class="btn btn-success">Update Berita</button>
                    </p>


                </div>

            </form>

        </div>
    </div>
</div>
