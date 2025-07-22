<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card" style="width: auto;">
        <div class="card-header">
            Pengurus
        </div>
        <div class="card-body">
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="{{ route('pengurus.add') }}" class="btn btn-success">Add</a>
            <br>
            <br>
            <table class="table" id="data">
                <thead>
                    <tr>
                        <th>Nama Pengurus</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Foto</th>
                        <th>Periode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengurus as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->divisi->nama_divisi ?? '' }}</td>
                            <td>{{ $p->jabatan }}</td>
                            <td><img src="{{ asset('assets/fotos/fotos') }}/{{ $p->foto }}" class="img-thumbnail"
                                    style=" width: 50px; height: 50px" alt=""></td>
                            <td>{{ $p->periode }}</td>
                            <td>
                                <div class="form-group">
                                     <a href="{{ route('pengurus.edit', ['pengurus_id' => $p->id]) }}"
                                    class="btn btn-success fa fa-pencil"></a>

                                </div>
                               
                                <div class="form-group">
                                     <a href="#" wire:click.prevent="deleteP({{ $p->id }})"
                                    class="btn btn-danger fa fa-trash"></a>

                                </div>
                               

                            </td>
                        </tr>

                </tbody>
                @endforeach


            </table>

        </div>

    </div>
    <script>
        new DataTable('#data');
    </script>
</div>
  {{-- @foreach ($pengurus as $p)
                <div class="col-6 col-md-4 col-lg-3 text-center">
                    <img src="{{ asset('assets/fotos/fotos')}}/{{$p->foto}}" class="rounded img-fluid"
                        style="width: 140px; height: 140px; object-fit: cover" alt="Ketua" />
                    <h5 class="mt-2">{{$p->nama}}</h5>
                    <p class="text-muted">{{$p->divisi->nama_jabatan}}</p>
                </div>
        @endforeach --}}