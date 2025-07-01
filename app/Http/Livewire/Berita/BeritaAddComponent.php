<?php

namespace App\Http\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;


class BeritaAddComponent extends Component
{
    use WithFileUploads;

    public $judul;
    public $slug;
    public $isi;
    public $thumbnail = [];
    public $kategori;
    public $penulis;
    public $status;
    public $published_at;
    

    public function addBerita()
    {
        $this->validate([
            'judul' => 'required',
            'slug' => 'required',
            'isi' => 'required',
            'thumbnail' => 'required',
            'kategori' => 'required',
            'penulis' => 'required',
            'status' => 'required',
            'published_at' => 'required'
        ]);

        $imageNames = [];

        foreach ($this->thumbnail as $foto) {
            $imageName = Carbon::now()->timestamp . '_' . Str::random(5) . '.' . $foto->extension();
            $foto->storeAs('fotos', $imageName);
            $imageNames[] = $imageName;
        }

        $berita = new Berita();
        $berita->judul = $this->judul; 
        $berita->slug = $this->slug;
        $berita->isi = $this->isi;
        $berita->thumbnail = json_encode($imageNames);
        $berita->kategori = $this->kategori;
        $berita->penulis = $this->penulis;
        $berita->status = $this->status;
        $berita->published_at = $this->published_at;
        $berita->save();

        session()->flash('notif', 'berhasil');
        return redirect()->route('berita.add');

    }

    public function render()
    {
        return view('livewire.berita.berita-add-component')->layout('layouts.layout-admin');
    }
}
