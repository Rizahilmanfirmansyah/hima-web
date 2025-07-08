<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ViewAdminComponent extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.view-admin-component', [
            'users'=>$users
        ])->layout('layouts.layout-admin');
    }
}
