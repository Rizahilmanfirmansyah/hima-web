<?php

namespace App\Http\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;

class BeritaAllComponent extends Component
{
    public function render()
    {
        $berita = Berita::all();
        return view('livewire.berita.berita-all-component', [
            'berita' => $berita
        ])->layout('layouts.layout-admin');

    }
}
