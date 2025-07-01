<?php

namespace App\Http\Livewire;

use Livewire\Component;

class KegiatanComponent extends Component
{
    public function render()
    {
        return view('livewire.kegiatan-component')->layout('layouts.layout-home');
    }
}
