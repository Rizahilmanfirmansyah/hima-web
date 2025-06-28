<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card" style="width: 50rem">
        <div class="card-header">
            Pengurus
        </div>
        <div class="card-body">
             @if (Session::has('notif'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">{{Session::get('notif')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
            <a href="{{ route('pengurus.add')}}" class="btn btn-success">Add</a>
            <br>
            <table class="table">
                <tr>
                    <th>Nama Pengurus</th>
                    <th>Divisi</th>
                    <th>Jabatan</th>
                    <th>Foto</th>
                    <th>Periode</th>
                    <th>Action</th>
                </tr>
                @foreach ($pengurus as $p)
                 <tr>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->divisi->nama_divisi ?? ''}}</td>
                    <td>{{$p->jabatan}}</td>
                    <td><img src="{{ asset('assets/fotos/fotos')}}/{{$p->foto}}" style=" width: 100px" alt=""></td>
                    <td>{{$p->periode}}</td>
                    <td>
                        <a href="{{ route('pengurus.edit', ['pengurus_id'=>$p->id])}}" class="btn btn-success">Edit</a>
                        <a href="#" wire:click.prevent="delete({{$p->id}})" class="btn btn-danger fa fa-trash"></a>

                    </td>
                </tr>
                    
                @endforeach
               

            </table>
            
        </div>

    </div>
</div>
