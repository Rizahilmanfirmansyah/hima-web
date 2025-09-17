<?php

namespace App\Http\Livewire\PendaftaranHima;

use Livewire\Component;
use App\Models\Pendaftaran_himpunan;
use App\Models\Divisi;

class PendaftaranEditComponent extends Component
{
    public $nama;
    public $motivasi;
    public $divisi_pilihan;
    public $status_seleksi;
    public $tanggal_daftar;

    public function mount($pendaftaran_id)
    {
        $pendaftaran = Pendaftaran_himpunan::where('id', $pendaftaran_id)->first();
        $this->nama = $pendaftaran->nama;
        $this->motivasi = $pendaftaran->motivasi;
        $this->divisi_pilihan = $pendaftaran->divisi_pilihan;
        $this->status_seleksi = $pendaftaran->status_seleksi;
        $this->tanggal_daftar = $pendaftaran->tanggal_daftar;
        $this->pendaftaran_id = $pendaftaran->id;
    }

     public function editPendaftaran()
    {
        $this->validate([
            'nama' => 'required',
            'motivasi' => 'required',
            'divisi_pilihan' => 'required',
            'status_seleksi' => 'required',
            'tanggal_daftar' => 'required'
        ]);

        $pendaftaran = Pendaftaran_himpunan::find($this->pendaftaran_id);
        $pendaftaran->nama = $this->nama;
        $pendaftaran->motivasi = $this->motivasi;
        $pendaftaran->divisi_pilihan = $this->divisi_pilihan;
        $pendaftaran->status_seleksi = $this->status_seleksi;
        $pendaftaran->tanggal_daftar = $this->tanggal_daftar;
        $pendaftaran->save();

        session()->flash('notif', 'Berhasil Di Tambahkan');
        return redirect()->route('pendaftaran.all');

    }

    public function render()
    {
        $divisis = Divisi::all();
        return view('livewire.pendaftaran-hima.pendaftaran-edit-component', [
            'divisis' => $divisis
        ])->layout('layouts.layout-admin');
    }
}
