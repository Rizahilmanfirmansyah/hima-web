<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card" style="width: 30rem">
        <div class="card-header">
            Add Divisi
        </div>
        <div class="card-body">
            <form wire:submit.prevent="editDivisi">
                <div class="form-group">
                <label for="nama" class="form-label">Nama Divisi</label>
                <input type="text" class="form-control" wire:model="nama_divisi">
            </div>
             <div class="form-group">
                <label for="nama" class="form-label">Nama Divisi</label>
                <input type="text" class="form-control" wire:model="deskripsi">
            </div>
            <button type="submit" class="btn btn-succes">Add</button>

            </form>
            

        </div>

    </div>
</div>
