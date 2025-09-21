<?php

namespace App\Http\Livewire\PendaftaranHima;

use Livewire\Component;
use App\Models\Pendaftaran_himpunan;

class PendaftaranAllComponent extends Component
{

    public $pendId;

    protected $listeners = ['deleteConfirmed' => 'deletePendaftar'];

    public function mount()
    {
        $this->pendId = Pendaftaran_himpunan::all();
    }

    public function confirmDelete($id)
    {
        $this->dispatchBrowserEvent('show-delete-confirmation', ['id' => $id]);
    }

     public function deletePendaftar($id)
    {
        $pendaftar = Pendaftaran_himpunan::find($id);
        if ($pendaftar){
            $pendaftar->delete();
            session()->flash('notif', 'berhasil dihapus');
            $this->pendId = Pendaftaran_himpunan::all();
        }
    }

    public function render()
    {
        $pendaftaran = Pendaftaran_himpunan::all();
        return view('livewire.pendaftaran-hima.pendaftaran-all-component', [
            'pendaftaran' => $pendaftaran
        ])->layout('layouts.layout-admin');
    }
}
