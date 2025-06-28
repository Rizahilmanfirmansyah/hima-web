<?php

namespace App\Http\Livewire\Pengurus;

use Livewire\Component;
use App\Models\Pengurus;

class PengurusAllComponent extends Component
{
    public function deleteP($id)
    {
        $pengurus = Pengurus::find($id);
        $pengurus->delete();
        session()->flash('notif', 'berhasil di delete');
    }

    public function render()
    {
        $pengurus = Pengurus::all();
        return view('livewire.pengurus.pengurus-all-component', [
            'pengurus' => $pengurus
        ])->layout('layouts.layout-admin');
    }
}
