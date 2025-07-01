<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card" style="width: 50rem">
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
            <br>
            <table class="table">
                <tr>
                    <th>Nama Divisi</th>
                    <th>Deskripsi</th>
                    <th>Action</th>
                </tr>
                @foreach ($divisis as $divisi)
                    <tr>
                        <td>{{ $divisi->nama_divisi }}</td>
                        <td>{{ $divisi->deskripsi }}</td>
                        <td>
                            <a href="{{ route('divisi.edit', ['id_divisi' => $divisi->id]) }}">Edit</a>
                            <a href="#" wire:click.prevent="delete({{ $divisi->id }})"
                                class="btn btn-danger fa fa-trash"></a>

                        </td>
                    </tr>
                @endforeach


            </table>

        </div>

    </div>
</div>
