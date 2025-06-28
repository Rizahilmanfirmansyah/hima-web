<?php

namespace App\Http\Livewire\Divisi;

use Livewire\Component;
use App\Models\Divisi;

class DivisiAllComponent extends Component
{

     public function delete($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();
        session()->flash('notif', 'berhasil dihapus');
    }

    public function render()
    {
        $divisis = Divisi::all();
        return view('livewire.divisi.divisi-all-component', [
            'divisis' => $divisis
        ])->layout('layouts.layout-admin');
    }
}
