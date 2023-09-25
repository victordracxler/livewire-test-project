<?php

namespace App\Livewire;

use App\Models\Company as CompanyModel;
use Illuminate\Http\Request;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;


#[Layout('layouts.livewire')]

class Company extends Component
{

    public $company;
    public $formState = false;

    public $razao, $fantasia, $documento, $phone, $cell, $uf, $city, $address, $complemento, $email, $cep, $representante, $logo, $status, $company_type, $neighborhood;

    
    
    public function mount()
    {
        $this->load();
    }

    protected function rules()
    {
        
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
            ],
            'documento' => [
                'required',
                'string',
                Rule::unique('companies'),
            ],
            
        ];
    }

    public function store(Request $request)
    {
        $companyExists = CompanyModel::where('documento', $request->documento)->first();

        if($companyExists)
        {
            throw new ConflictHttpException('Já existe empresa cadastrada com este CPF/CNPJ');
        }
        // Cria uma nova empresa
        $company = new CompanyModel;
        $company->fill($request->all());
        $company->save();
        return response()->noContent(201);
    }
    public function load()
    {
        $this->formState = false;
        $this->company = CompanyModel::all();
    }

    public function limpar()
    {
        $this->company = null;
        $this->formState = false;
    }

    public function openForm()
    {
        $this->limpar();
        $this->formState = true;
    }

    public function addNewCompany(){
        $companyExists = CompanyModel::where('documento', $this->documento)->first();

        if($companyExists)
        {
            throw new ConflictHttpException('Já existe empresa cadastrada com este CPF/CNPJ');
        }
        //falta validar
        $attributesToFill = $this->only([
            'razao',
            'fantasia',
            'documento',
            'phone',
            'cell',
            'uf',
            'city',
            'address',
            'complemento',
            'neighborhood',
            'email',
            'cep',
            'representante',
            'logo',
            'status',
            'company_type'
        ]);
        
        $company = new CompanyModel;
        $company->fill($attributesToFill);
       
        

        try {
            
            $company->save();
            
            
            $this->attributesToFill->reset();
            session()->flash('success', [
                'title' => 'Parabéns!',
                'message' => 'Cadastrado com sucesso!'
            ]);
            
            return response()->noContent(201);
            

        } catch (\Throwable $th) {
            session()->flash('error', [
                'title' => 'Aconteceu algo!',
                'message' => 'deu ruim'
            ]);
        }
        

    }

    public function resetInput(){
        $attributesToFill = $this->only([
            'razao',
            'fantasia',
            'documento',
            'phone',
            'cell',
            'uf',
            'city',
            'address',
            'complemento',
            'neighborhood',
            'email',
            'cep',
            'representante',
            'logo',
            'status',
            'company_type'
        ]);
     foreach ($attributesToFill as $value) {
        $value->reset();
     }

        
    }

    public function render()
    {
        return view('livewire.company');
    }


}