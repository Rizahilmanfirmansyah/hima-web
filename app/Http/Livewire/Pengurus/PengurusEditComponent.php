<?php

namespace App\Http\Livewire\Pengurus;

use Livewire\Component;
use App\Models\Pengurus;
use App\Models\Divisi;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class PengurusEditComponent extends Component
{
    use WithFileUploads;

    public $nama;
    public $id_divisi;
    public $jabatan;
    public $foto;
    public $img;
    public $periode;
    
    public function mount($pengurus_id)
    {
        $pengurus = Pengurus::where('id', $pengurus_id)->first();
        $this->nama = $pengurus->nama;
        $this->id_divisi = $pengurus->divisi->id;
        $this->jabatan = $pengurus->jabatan;
        $this->periode = $pengurus->periode;
        $this->foto = $pengurus->foto;
        $this->pengurus_id = $pengurus->id;    

    }

    public function editPengurus()
    {
        $pengurus = Pengurus::find($this->pengurus_id);
        $pengurus->nama = $this->nama;
        $pengurus->id_divisi = $this->id_divisi;
        $pengurus->jabatan = $this->jabatan;
        $pengurus->periode = $this->periode;
         if ($this->img) {
            $imagename = Carbon::now()->timestamp. '.' .$this->img->extension();
            $this->img->storeAs('fotos', $imagename);
            $pengurus->foto = $imagename;
        }
        $pengurus->save();
        session()->flash('notif', 'Berhasil Di Tambahkan');
        return redirect()->route('pengurus.all');

    }

    public function render()
    {
        $divisi = Divisi::all();
        return view('livewire.pengurus.pengurus-edit-component', [
            'divisi' => $divisi
        ])->layout('layouts.layout-admin');
    }
}
