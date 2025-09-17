<?php

namespace App\Http\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;
use App\Models\Kategori;
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
    public $id_kategori;
    public $penulis;
    public $status;
    public $published_at;
    

    public function addBerita()
    {
        // $this->validate([
        //     'judul' => 'required',
        //     'slug' => 'required',
        //     'isi' => 'required',
        //     'thumbnail' => 'required',
        //     'id_kategori' => 'required',
        //     'penulis' => 'required',
        //     'status' => 'required',
        //     'published_at' => 'required'
        // ]);

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
        $berita->id_kategori = $this->id_kategori;
        $berita->penulis = $this->penulis;
        $berita->status = $this->status;
        $berita->published_at = $this->published_at;
        $berita->save();

        session()->flash('notif', 'berhasil');
        return redirect()->route('berita.add');

    }

    public function render()
    {
        $kategoriw = Kategori::all();
        return view('livewire.berita.berita-add-component', [
            'kategoriw' => $kategoriw
        ])->layout('layouts.layout-admin');
    }
}
