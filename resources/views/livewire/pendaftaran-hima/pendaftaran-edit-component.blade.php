<div>
    <div class="card" style="width: auto">
        <div class="card-body">
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <form wire:submit.prevent="addPendaftaran">
                <div class="form-group">
                    <label for="" class="form-label">Nama</label>
                    <input type="text" class="form-control" wire:model="nama">
                </div>
                <div class="form-group">
                    <label for="" class="from-label">Motivasi</label>
                    <input type="text" class="form-control" wire:model="motivasi">
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Divisi Pilihan</label>
                    <select name="" class="form-control" id="" wire:model="divisi_pilihan">
                        @foreach ($divisi as $item)
                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="" class="form-label">Tanggal Daftar</label>
                    <input type="date" class="form-control" wire:model="tanggal_daftar">
                </div>
                <p class="form-group">
                    <button type="submit" class="btn btn-success">Add</button>
                </p>
            </form>
        </div>

    </div>
</div>
