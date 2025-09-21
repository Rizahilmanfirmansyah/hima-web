<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita;

class KegiatanComponent extends Component
{

    public function render()
    {
        $kegiatane = Berita::all();
        return view('livewire.kegiatan-component',[
            'kegiatane' => $kegiatane
        ])->layout('layouts.layout-home');
    }
}
