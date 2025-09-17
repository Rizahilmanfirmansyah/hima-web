<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="d-flex justify-content-center">
        <div class="card" style="width: auto">
            <div class="card-header">

            </div>
            <div class="card-body">
                <form wire:submit.prevent='AddKategori'>
                    <div class="form-group">
                        <label for="#" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" wire:model="nama_kategori">
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
