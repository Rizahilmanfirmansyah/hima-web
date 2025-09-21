<?php

namespace App\Http\Livewire\Divisi;

use Livewire\Component;
use App\Models\Divisi;

class DivisiAllComponent extends Component
{
    public $divisid;

    protected $listeners = ['deleteConfirmed' => 'deleteDivisi'];

    public function mount()
    {
        $this->divisid = Divisi::all();
    }

    public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }


     public function deleteDivisi($id)
    {
        $divisi = Divisi::find($id);
        if ($divisi){
            $divisi->delete();
            session()->flash('notif', 'berhasil dihapus');
            $this->divisid = Divisi::all();
        }
    }

    public function render()
    {
        $divisis = Divisi::all();
        return view('livewire.divisi.divisi-all-component', [
            'divisis' => $divisis
        ])->layout('layouts.layout-admin');
    }
}
