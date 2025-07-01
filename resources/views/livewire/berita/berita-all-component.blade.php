<div>
    <div class="card" style="width: auto">
        <div class="card-body">
            @if (Session::has('notif'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ Session::get('notif') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <table class="table">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="p-2 border">No</th>
                        <th class="p-2 border">Judul</th>
                        <th class="p-2 border">Thumbnail</th>
                        <th class="p-2 border">Kategori</th>
                        <th class="p-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($berita as $index => $b)
                        <tr class="border-t">
                            <td class="p-2 border">{{ $index + 1 }}</td>
                            <td class="p-2 border">{{ $b->judul }}</td>

                            {{-- Tampilkan banyak thumbnail --}}
                            <td class="p-2 border">
                                @php
                                    $thumbnails = json_decode($b->thumbnail, true);
                                @endphp
                                <div class="flex flex-wrap gap-1">
                                    @if ($thumbnails)
                                        @foreach ($thumbnails as $thumb)
                                            <img src="{{ asset('assets/fotos/fotos')}}/{{$thumb}}" style="width: 50px" class="img-thumbnail" alt="thumb"
                                                class="w-12 h-12 object-cover rounded">
                                        @endforeach
                                    @else
                                        <span class="text-gray-400 text-sm">-</span>
                                    @endif
                                </div>
                            </td>

                            <td class="p-2 border">{{ $b->kategori }}</td>

                            <td class="p-2 border">
                                <a href="{{ route('berita.edit',['berita_id' => $b->id])}}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>


        <h2 class="text-xl font-semibold mb-4">Daftar Berita</h2>


    </div>


</div>
