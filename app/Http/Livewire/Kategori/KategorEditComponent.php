<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class KategorEditComponent extends Component
{
    public $kategori;

    public function mount($id_kategori)
    {
        $kategori = Kategori::where('id', $id_kategori)->first();
        $this->nama_kategori = $kategori->nama_kategori;
        $this->id_kategori = $kategori->id;
    }

    public function EditKategori()
    {
        $kategori = Kategori::find($this->id_kategori);
        $kategori->nama_kategori = $this->nama_kategori;
        $kategori->save();

        session()->flash('notif', 'Kategori Berhasil Di Update');
        return redirect()->route('kategori.all');

    }


    public function render()
    {
        return view('livewire.kategori.kategor-edit-component')->layout('layouts.layout-admin');
    }
}
