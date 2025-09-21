<div>
    <div class="card" style="width: auto">

        <div class="card-body">
            <div>
                <a href="{{ route('berita.add') }}" class="btn btn-success">Add</a>
            </div>
            <br>
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table" id="data">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        {{-- <th class="">No</th> --}}
                        <th class="">Judul</th>
                        <th>Isi</th>
                        <th class="">Thumbnail</th>
                        <th class="">Kategori</th>
                        <th>Status</th>
                        <th>Publish</th>
                        <th class="">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $index => $b)
                        <tr class="border-t">
                            {{-- <td class="">{{ $index + 1 }}</td> --}}
                            <td class="">{{ $b->judul }}</td>
                            <td>{{ $b->isi}}</td>

                            {{-- Tampilkan banyak thumbnail --}}
                            <td class="">
                                @php
                                    $thumbnails = json_decode($b->thumbnail, true);
                                @endphp
                                <div class="flex flex-wrap gap-1">
                                    @if ($thumbnails)
                                        @foreach ($thumbnails as $thumb)
                                            <img src="{{ asset('assets/fotos/fotos') }}/{{ $thumb }}"
                                                style=" width: 50px; height: 50px" class="img-thumbnail" alt="thumb"
                                                class="w-12 h-12 object-cover rounded">
                                        @endforeach
                                    @else
                                        <span class="text-gray-400 text-sm">-</span>
                                    @endif
                                </div>
                            </td>

                            <td class="">{{ $b->kategori->nama_kategori ?? '' }}</td>
                            <td>{{$b->status}}</td>
                            <td>{{$b->published_at}}</td>

                            <td class="">
                                <a href="{{ route('berita.edit', ['berita_id' => $b->id]) }}" class="btn btn-secondary fa fa-pencil"></a>
                                <br><br>
                                <a href="#" wire:click.prevent='confirmDelete({{$b->id}})' class="btn btn-secondary fa fa-trash"></a>
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
