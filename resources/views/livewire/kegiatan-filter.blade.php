<div>
    <!-- Filter Buttons -->
    <div class="text-center mb-4">
        <button class="btn btn-primary" wire:click="setFilter('all')"
            class="px-4 py-2 mx-1 rounded {{ $filter == 'all' ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
            Semua
        </button>

        @foreach ($kategoris as $kategori)
            <button class="btn btn-primary" wire:click="setFilter('{{ $kategori->nama_kategori }}')"
                class="px-4 py-2 mx-1 rounded {{ $filter == $kategori->nama_kategori ? 'bg-blue-600 text-white' : 'bg-gray-200' }}">
                {{ ucfirst($kategori->nama_kategori) }}
            </button>
        @endforeach
    </div>

    <!-- Kegiatan Cards -->
    <div class="container my-5">
        <div class="row">
            <!-- Card 1 -->
            @forelse ($kegiatans as $kegiatan)
                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card shadow-lg border-0 h-100">
                        <img src="{{ asset('assets/fotos/fotos')}}/{{ $kegiatan->thumbnail }}" style=" height: 200px"
                            class="card-img-top" alt="Seminar AI">
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
