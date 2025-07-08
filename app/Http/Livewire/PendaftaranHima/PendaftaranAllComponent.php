<?php

namespace App\Http\Livewire\PendaftaranHima;

use Livewire\Component;
use App\Models\Pendaftaran_himpunan;

class PendaftaranAllComponent extends Component
{
    public function delete($id)
    {
        $pendaftaran = Pendaftaran_hima::find($id)->fist();
        $pendaftaran->delete();
        session()->flash('notif', 'berhasil ditambahkan');
        return redirect()->route('pendaftaran.all');
    }
    public function render()
    {
        $pendaftaran = Pendaftaran_himpunan::all();
        return view('livewire.pendaftaran-hima.pendaftaran-all-component', [
            'pendaftaran' => $pendaftaran
        ])->layout('layouts.layout-admin');
    }
}
