<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita;
use App\Models\Pengurus;

class HomeComponent extends Component
{
    public function render()
    {
        $beritas = Berita::where('status', 'published')->take(3)->get();
        $kh = Pengurus::whereIn('jabatan', ['Ketua Himpunan', 'Wakil Ketua Himpunan'])->get();
        return view('livewire.home-component',[
            'beritas' => $beritas,
            'kh' => $kh
        ]
        )->layout('layouts.layout-home');
    }
}
