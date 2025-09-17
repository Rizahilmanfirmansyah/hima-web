<?php

namespace App\Http\Livewire\Berita;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class BeritaEditComponent extends Component
{
    use WithFileUploads;

    public $berita_id;
    public $judul;
    public $slug, $isi, $id_kategori, $penulis, $status, $published_at;
    public $thumbnail = []; // input baru
    public $existingthumbnail = []; // foto lama dari DB

    public function mount($berita_id)
    {
        $berita = Berita::where('id', $berita_id)->first();
        $this->judul = $berita->judul;
        $this->slug = $berita->slug;
        $this->isi = $berita->isi;
        $this->id_kategori = $berita->id_kategori;
        $this->penulis = $berita->penulis;
        $this->status = $berita->status;
        $this->published_at = $berita->published_at;
        $this->existingthumbnail = json_decode($berita->thumbnail, true) ?? [];
    }

    public function updateBerita()
    {
        $this->validate([
            'judul' => 'required',
            'slug' => 'required',
            'isi' => 'required',
            'thumbnail.*' => 'nullable|image|max:2048',
            'id_kategori' => 'required',
            'penulis' => 'required',
            'status' => 'required',
            'published_at' => 'required'
        ]);

        $imageNames = $this->existingthumbnail;

        // Upload foto baru (jika ada)
        if ($this->thumbnail) {
            foreach ($this->thumbnail as $foto) {
                $imageName = Carbon::now()->timestamp . '_' . Str::random(5) . '.' . $foto->extension();
                $foto->storeAs('fotos', $imageName);
                $imageNames[] = $imageName;
            }
        }

        $berita = Berita::find($this->berita_id);
        $berita->judul = $this->judul;
        $berita->slug = $this->slug;
        $berita->isi = $this->isi;
        $berita->thumbnail = json_encode($imageNames);
        $berita->id_kategori = $this->id_kategori;
        $berita->penulis = $this->penulis;
        $berita->status = $this->status;
        $berita->published_at = $this->published_at;
        $berita->save();

        session()->flash('success', 'Berita berhasil diperbarui.');
        return redirect()->route('berita.all');
    }

    public function render()
    {
        $kategoriw = Kategori::all();
        return view('livewire.berita.berita-edit-component', [
            'kategoriw' => $kategoriw
        ])->layout('layouts.layout-admin');
    }
}
