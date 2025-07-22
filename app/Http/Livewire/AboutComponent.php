<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pengurus;

class AboutComponent extends Component
{
    public function render()
    {
        $pengurus = Pengurus::all();
        return view('livewire.about-component',[
            'pengurus' => $pengurus
        ])->layout('layouts.layout-home');
    }
}
