<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita;
use App\Models\Divisi;
use App\Models\Pendaftaran_himpunan;
use App\Models\Pengurus;

class DashboardAdminComponent extends Component
{
    public function render()
    {
        $berita = Berita::count();
        $penguruse = Pengurus::count();
        $divisi = Divisi::count();
        $daftar = Pendaftaran_himpunan::count();
        $pengurus = Pengurus::all();

        return view('livewire.dashboard-admin-component', [
            'berita' => $berita,
            'pengurus' => $pengurus,
            'penguruse' => $penguruse,
            'daftar' => $daftar,
            'divisi' => $divisi
        ])->layout('layouts.layout-admin');
    }
}
