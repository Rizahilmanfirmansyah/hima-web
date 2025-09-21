<?php

namespace App\Http\Livewire\Berita;

use Livewire\Component;
use App\Models\Berita;

class BeritaAllComponent extends Component
{
    public $beritaId;

    protected $listeners = ['deleteConfirmed' => 'deleteBerita'];

    public function mount()
    {
        $this->beritaId = Berita::all();
    }

    public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }


     public function deleteBerita($id)
    {
        $berita = Berita::find($id);
        if ($berita){
            $berita->delete();
            session()->flash('notif', 'berhasil dihapus');
            $this->beritaId = Berita::all();
        }
    }


    public function render()
    {
        $berita = Berita::all();
        return view('livewire.berita.berita-all-component', [
            'berita' => $berita
        ])->layout('layouts.layout-admin');

    }
}
