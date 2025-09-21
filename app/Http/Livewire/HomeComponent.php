<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Berita;

class HomeComponent extends Component
{
    public function render()
    {
        $beritas = Berita::where('status', 'draft')->get();
        return view('livewire.home-component',[
            'beritas' => $beritas
        ]
        )->layout('layouts.layout-home');
    }
}
