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
            <a href="{{ route('kategori.add') }}" class="btn btn-success">Add</a>
            <br><br>
            <table class="table" id="data">
                <thead>
                    <tr>
                        <th>Nama Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategories as $kategori)
                        <tr>
                            <td>{{ $kategori->nama_kategori }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', ['id_kategori' => $kategori->id]) }}"
                                    class="btn btn-secondary fa fa-pencil"></a>
                                <a href="#" wire:click.prevent="confirmDelete({{ $kategori->id }})"
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
