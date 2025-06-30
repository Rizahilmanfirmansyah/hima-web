<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardAdminComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard-admin-component')-layout('layouts.admin-layout');
    }
}
