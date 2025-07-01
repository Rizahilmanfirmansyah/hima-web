<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DaftarComponent extends Component
{
    public function render()
    {
        return view('livewire.daftar-component')->layout('layouts.layout-home');
    }
}
