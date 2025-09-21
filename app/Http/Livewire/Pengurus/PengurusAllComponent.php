<?php

namespace App\Http\Livewire\Pengurus;

use Livewire\Component;
use App\Models\Pengurus;

class PengurusAllComponent extends Component
{
    public $pengId;

    protected $listeners = ['deleteConfirmed' => 'deletePengurus'];

    public function mount()
    {
        $this->pengId = Pengurus::all();
    }

    public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }


     public function deletePengurus($id)
    {
        $pengurus = Pengurus::find($id);
        if ($pengurus){
            $pengurus->delete();
            session()->flash('notif', 'berhasil dihapus');
            $this->pengId = Pengurus::all();
        }
    }


    public function render()
    {
        $pengurus = Pengurus::all();
        return view('livewire.pengurus.pengurus-all-component', [
            'pengurus' => $pengurus
        ])->layout('layouts.layout-admin');
    }
}
