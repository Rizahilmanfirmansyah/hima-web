<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class KategorAddComponent extends Component
{
    public $nama_kategori;

    public function AddKategori()
    {
        $this->validate([
            'nama_kategori' => 'required'
        ]);

        $kategori = new Kategori();
        $kategori->nama_kategori = $this->nama_kategori;
        $kategori->save();

        session()->flash('notif', 'Kategori Berhasil Di Tambahkan');
        return redirect()->route('kategori.all');

    }




    public function render()
    {
        return view('livewire.kategori.kategor-add-component')->layout('layouts.layout-admin');
    }
}
