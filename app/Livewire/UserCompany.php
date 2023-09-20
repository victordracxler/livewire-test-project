<?php

namespace App\Livewire;

use App\Models\Company as CompanyModel;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.livewire')]


class UserCompany extends Component
{
    public $companyList;
    public $usersList;
    
    public $user, $selectedUser;

    public function mount()
    {
        $this-> companyList = CompanyModel::all();
        $this-> usersList = User::all();

    }

    public function updateUserCompanyId($userId, $companyId){

    }
    public function render()
    {
        return view('livewire.user-company');
    }
}
