<?php

namespace App\Http\Livewire\Divisi;

use Livewire\Component;
use App\Models\Divisi;

class DivisiAddComponent extends Component
{
    public $nama_divisi;
    public $deskripsi;

    public function addDivisi()
    {
        $divisi = new Divisi();
        $divisi->nama_divisi = $this->nama_divisi;
        $divisi->deskripsi = $this->deskripsi;
        $divisi->save();

        session()->flash('notif', 'berhasil di tambahkan');
        return redirect()->route('divisi.all');
    }

    public function render()
    {
        $divisis = Divisi::all(); 
        return view('livewire.divisi.divisi-add-component', [
            'divisis' => $divisis
        ])->layout('layouts.layout-admin');
    }
}
