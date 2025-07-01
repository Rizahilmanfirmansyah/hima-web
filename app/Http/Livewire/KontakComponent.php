<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kontak;

class KontakComponent extends Component
{
    public $nama;
    public $email;
    public $pesan;

    public function addContact()
    {
        $this->validate([
            'nama' => 'required',
            'email' => 'required',
            'pesan' => 'required'
        ]);

        $contact = new Kontak;
        $contact = $this->nama;
        $contact = $this->email;
        $contact = $this->pesan;
        $contact->save();

        session()->flash('notif','Pesan Anda Berhasil Terkirim');
        return redirect()->route('user.kontak');

    }

    public function render()
    {
        return view('livewire.kontak-component')->layout('layouts.layout-home');
    }
}
