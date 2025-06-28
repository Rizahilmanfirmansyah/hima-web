<?php

namespace App\Http\Livewire\Divisi;

use Livewire\Component;
use App\Models\Divisi;


class DivisiEditComponent extends Component
{
    public $nama_divisi;
    public $deskripsi;
    public $id_divisi;

    public function mount($id_divisi)
    {
        $divisi = Divisi::where('id', $id_divisi)->first();
        $this->nama_divisi = $divisi->nama_divisi;
        $this->deskripsi = $divisi->deskripsi;
        $this->id_divisi = $divisi->id;

    }

    public function editDivisi()
    {
        $divisi = Divisi::find($this->id_divisi);
        $divisi->nama_divisi = $this->nama_divisi;
        $divisi->deskripsi = $this->deskripsi;
        $divisi->save();

        session()->flash('notif', 'berhasil di tambahkan');
        return redirect()->route('divisi.all');

    }

    public function render()
    {

        return view('livewire.divisi.divisi-edit-component')->layout('layouts.layout-admin');
    }
}
