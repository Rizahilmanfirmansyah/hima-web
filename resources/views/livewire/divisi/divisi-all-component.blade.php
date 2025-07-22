<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card" style="width: auto;">
        <div class="card-header">
            Divisi
        </div>
        <div class="card-body">
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="{{ route('divisi.add') }}" class="btn btn-success">Add</a>
            <br><br>
            <table class="table" id="data">
                <thead>
                    <tr>
                        <th>Nama Divisi</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($divisis as $divisi)
                        <tr>
                            <td>{{ $divisi->nama_divisi }}</td>
                            <td>{{ $divisi->deskripsi }}</td>
                            <td>
                                <a href="{{ route('divisi.edit', ['id_divisi' => $divisi->id]) }}" class="btn btn-secondary fa fa-pencil"></a>
                                <a href="#" wire:click.prevent="delete({{ $divisi->id }})"
                                    class="btn btn-danger fa fa-trash"></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>



            </table>

        </div>
        <script>
            new DataTable('#data');
        </script>
    </div>
</div>
