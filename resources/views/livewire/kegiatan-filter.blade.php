<div>
    <!-- Filter Buttons -->
    <div class="text-center mb-4 mt-4">
        <a href="#" style="text-decoration: none;" wire:click="setFilter('all')"
            class="px-4 py-2 mx-1 rounded {{ $filter == 'all' ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
            Semua
        </a>

        @foreach ($kategoris as $kategori)
            <a href="#" style="text-decoration: none;" wire:click="setFilter('{{ $kategori->nama_kategori }}')"
                class="px-4 py-2 mx-1 rounded mt-4 {{ $filter == $kategori->nama_kategori ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
                {{ ucfirst($kategori->nama_kategori) }}
            </a>
        @endforeach
    </div>

    <!-- Kegiatan Cards -->
    <div class="container my-5">
        <div class="row">
            <td class="">
                <!-- Card 1 -->
                @forelse ($kegiatans as $kegiatan)
                    <div class="col-md-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="card shadow-lg border-0 h-100">
                            @php
                                $thumbnails = json_decode($kegiatan->thumbnail, true);
                            @endphp
                            @if ($thumbnails)
                                @foreach ($thumbnails as $item)
                                    <img src="{{ asset('assets/fotos/fotos') }}/{{ $item }}"
                                        style=" height: 200px" class="card-img-top" alt="Seminar AI">
                                @endforeach
                            @else
                                <span class="text-gray-400 text-sm">-</span>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $kegiatan->judul }}</h5>
                                <p class="card-text">{{ $kegiatan->isi }}</p>
                                {{-- <span class="text-sm text-blue-500">{{ $kegiatan->kategori->nama_kategori }}</span> --}}

                            </div>
                        </div>
                    </div>

                @empty
                    <p class="col-span-3 text-center text-gray-500">Belum ada kegiatan.</p>
                @endforelse

        </div>

    </div>


    {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @forelse($kegiatans as $kegiatan)
            <div class="bg-white rounded-lg shadow p-4">
                <img src="{{ asset('assets/fotos/fotos') }}/{{ $kegiatan->thumbnail }}"
                    class="rounded mb-3 w-full h-48 object-cover" alt="">
                <h3 class="text-lg font-semibold">{{ $kegiatan->judul }}</h3>
                <p class="text-gray-600">{{ $kegiatan->isi }}</p>
                <span class="text-sm text-blue-500">{{ $kegiatan->kategori->nama_kategori }}</span>
            </div>
        @empty
            <p class="col-span-3 text-center text-gray-500">Belum ada kegiatan.</p>
        @endforelse
    </div> --}}
</div>
