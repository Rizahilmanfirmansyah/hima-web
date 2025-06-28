<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card" style="width: 30rem">
        <div class="card-header">
            Add Divisi
        </div>
        <div class="card-body">
            <form wire:submit.prevent="addPengurus">
                <div class="form-group">
                <label for="nama" class="form-label">Nama Pengurus</label>
                <input type="text" class="form-control" wire:model="nama">
            </div>
             <div class="form-group">
                <label for="nama" class="form-label">Divisi</label>
                <select name="" id="" class="form-control" wire:model="id_divisi">
                <option value="" selected>Pilih Divisi</option>
                @foreach ($divisi as $d)
                <option value="{{$d->id}}">{{$d->nama_divisi}}</option>
                @endforeach
                </select>
                @error('category_id') <span class="error">{{ $message }}</span> @enderror
             </div>
             <div class="form-group">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" name="" wire:model="jabatan" class="form-control">
             </div>
              <div class="form-group">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" name="" wire:model="periode" class="form-control">
             </div>
             <div class="form-group">
                <label for="" class="form-label">Foto</label>
                <input type="file" name="" wire:model="foto" class="form-control" id="">
                <br>
                @if ($this->foto)
                <img src="{{$foto->temporaryUrl()}}" style="width: 100px" alt="">
                @error('image') <span class="error">{{ $message }}</span> @enderror
                @endif 
             </div>

            <button type="submit" class="btn btn-succes">Add</button>

            </form>
            

        </div>

    </div>
</div>
