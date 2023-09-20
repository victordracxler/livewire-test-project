<?php

namespace App\Livewire;

use App\Models\Company as CompanyModel;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.livewire')]


class UserCompany extends Component
{
    public $companyList, $company, $selectedCompany;
    public $usersList, $user, $selectedUser;

    

    public function mount()
    {
        $this->companyList = CompanyModel::all();
        $this->usersList = User::all();

    }

    public function updateUserCompanyId($userId, $companyId)
    {

    }

    public function handleSelectChangeUser()
    {      
        $this->selectedUser = User::find($this->selectedUser)->id;
    }
    public function handleSelectChangeCompany()
    {      
        $this->selectedCompany = CompanyModel::find($this->selectedCompany)->id;
    }

    public function render()
    {
        return view('livewire.user-company');
    }
}