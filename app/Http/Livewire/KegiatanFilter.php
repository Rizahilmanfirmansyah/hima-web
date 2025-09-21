<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Berita;

class KegiatanFilter extends Component
{
    public $filter = 'all';
    public $kegiatans;
    public $kategoris;

    public function mount()
    {
        $this->kategoris = Kategori::all();
        $this->loadKegiatan();
    }

    public function setFilter($kategori)
    {
        $this->filter = $kategori;
        $this->loadKegiatan();
    }

    public function loadKegiatan()
    {
        if ($this->filter === 'all') {
            $this->kegiatans = Berita::with('kategori')->get();
        } else {
            $this->kegiatans = Berita::with('kategori')
                ->whereHas('kategori', function ($query) {
                    $query->where('nama_kategori', $this->filter);
                })->get();
        }
    }

    public function render()
    {
        return view('livewire.kegiatan-filter')->layout('layouts.layout-home');
    }
}
