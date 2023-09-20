<?php

namespace App\Livewire;

use App\Models\Company as CompanyModel;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.livewire')]

class Company extends Component
{

    public $company;
    public function mount()
    {
     $this->load();
      
    }

    public function store(Request $request)
    {

        // Cria uma nova empresa
        $company = new CompanyModel;
        $company->fill($request->all());

        $company->save();
        return response()->noContent(201);
    
    }
    public function load()
    {
       
        $this->company = CompanyModel::all();
        
    }

    public function limpar()
    {
       
        $this->company = null;
        
    }
    public function render()
    {
        
        return view('livewire.company');
    }


}
