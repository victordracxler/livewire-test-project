<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.livewire')]



class AddUser extends Component
{
    public function render()
    {
        return view('livewire.add-user');
    }
}
