<?php

namespace App\Http\Livewire\Kategori;

use Livewire\Component;
use App\Models\Kategori;

class KategorAllComponent extends Component
{
    protected $katId;
    protected $listeners = ['deleteConfirmed' => 'deleteKat'];

    public function mount()
    {
        $this->katId = Kategori::all();
    }

     public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

    public function deleteKat($id)
    {
        $kategori = Kategori::find($id);
        if ($kategori){
            $kategori->delete();
            session()->flash('notif', 'berhasil dihapus');
            $this->katId = Kategori::all();
        }
    }


   

    public function render()
    {
        $kategories = Kategori::all();
        return view('livewire.kategori.kategor-all-component', [
            'kategories' => $kategories
        ])->layout('layouts.layout-admin');
    }
}
