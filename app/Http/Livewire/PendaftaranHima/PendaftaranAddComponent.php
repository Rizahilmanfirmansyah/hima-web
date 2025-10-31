<?php

namespace App\Http\Livewire\PendaftaranHima;

use Livewire\Component;
use App\Models\Pendaftaran_himpunan;
use App\Models\Divisi;


class PendaftaranAddComponent extends Component
{
    public $nama;
    public $motivasi;
    public $divisi_pilihan;
    public $status_seleksi;
    public $tanggal_daftar;

    public function addPendaftaran()
    {
        $this->validate([
            'nama' => 'required',
            'motivasi' => 'required',
            'divisi_pilihan' => 'required',
            'tanggal_daftar' => 'required'
        ]);

        $pendaftaran = new Pendaftaran_himpunan();
        $pendaftaran->nama = $this->nama;
        $pendaftaran->motivasi = $this->motivasi;
        $pendaftaran->divisi_pilihan = $this->divisi_pilihan;
        $pendaftaran->status_seleksi = 'diproses';
        $pendaftaran->tanggal_daftar = $this->tanggal_daftar;
        $pendaftaran->save();

        session()->flash('notif', 'Pendaftaran Berhasil Di Tambahkan');
        return redirect()->route('pendaftaran.add');
    }
    public function render()
    {
        $divisi = Divisi::all();
        return view('livewire.pendaftaran-hima.pendaftaran-add-component', [
            'divisi' => $divisi
        ])->layout('layouts.layout-home');
    }
}
