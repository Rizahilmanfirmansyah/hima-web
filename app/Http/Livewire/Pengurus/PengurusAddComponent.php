<?php

namespace App\Http\Livewire\Pengurus;

use Livewire\Component;
use App\Models\Pengurus;
use App\Models\Divisi;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class PengurusAddComponent extends Component
{
        use WithFileUploads;

        public $nama;
        public $id_divisi;
        public $jabatan;
        public $foto;
        public $periode;

    public function addPengurus()
    {
        $this->validate([
            'nama' => 'required',
            'id_divisi' => 'required',
            'jabatan' => 'required',
            'foto' => 'required'

        ]);

        $pengurus = new Pengurus();
        $pengurus->nama = $this->nama;
        $pengurus->id_divisi = $this->id_divisi;
        $pengurus->jabatan = $this->jabatan;
        $pengurus->periode = $this->periode;
        $imageName = Carbon::now()->timestamp. '.' .$this->foto->extension();
        $this->foto->storeAs('fotos', $imageName);
        $pengurus->foto = $imageName;
        $pengurus->save();

        session()->flash('notif', 'Berhasil Di Tambahkan');
        return redirect()->route('pengurus.all');
    }
    public function render()
    {
        $divisi = Divisi::all();
        return view('livewire.pengurus.pengurus-add-component', [
            'divisi' => $divisi
        ])->layout('layouts.layout-admin');
    }
}
