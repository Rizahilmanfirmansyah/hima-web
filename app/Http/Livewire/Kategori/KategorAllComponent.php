<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class KategorAllComponent extends Component
{
    public function delete($id)
    {
        $kategori = Kategori::find('id', $id)->first();
        $kategori->delete();
        session()->flash('notif', 'Kategori Berhasil Di Hapus');
        return redirect()->route('kategori.all');
    }

    public function render()
    {
        $kategories = Kategori::all();
        return view('livewire.kategori.kategor-all-component', [
            'kategories' => $kategories
        ])->layout('layouts.layout-admin');
    }
}
