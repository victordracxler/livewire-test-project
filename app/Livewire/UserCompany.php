<?php

namespace App\Livewire;

use App\Models\Company as CompanyModel;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

#[Layout('layouts.livewire')]


class UserCompany extends Component
{
    public $companyList, $company, $selectedCompany, $usersList, $user, $selectedUser;
       

    public function mount()
    {
        $this->companyList = CompanyModel::all();
        $this->usersList = User::all();

    }

    public function updateUserCompanyId()
    {
        $user = User::findOr($this->selectedUser, function(){throw new NotFoundHttpException('Usuário não encontrado');});
        $user->company_id = $this->selectedCompany;
        $user->save();
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