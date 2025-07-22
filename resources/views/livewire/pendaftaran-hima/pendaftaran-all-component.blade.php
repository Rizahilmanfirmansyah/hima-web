<div>
    <div class="card" style="width: auto">
        <div class="card-body">
            <table class="table" id="data">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Motivasi</th>
                        <th>Divisi Pilihan</th>
                        <th>Status</th>
                        <th>Tanggal Daftar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftaran as $p)
                        <tr>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->motivasi }}</td>
                            <td>{{ $p->divisi->nama_divisi ?? '' }}</td>
                            <td>{{ $p->status }}</td>
                            <td>{{ $p->tanggal_daftar }}</td>
                            <td>
                                <a href="{{ route('pendaftaran.edit', ['pendaftaran_id' => $p->id]) }}"
                                    class="btn fa fa-pencil"></a>
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
