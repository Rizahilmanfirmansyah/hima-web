<?php

namespace App\Http\Livewire\PendaftaranHima;

use Livewire\Component;
use App\Models\Pendaftaran_hima;

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
        return view('livewire.pendaftaran-hima.pendaftaran-all-component')->layout('layouts.layout-home');
    }
}
