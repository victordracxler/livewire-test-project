<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

use Livewire\Component;

#[Layout('layouts.livewire')]



class AddUser extends Component
{

    public $name, $email, $password, $password_confirmation, $id;

    protected function rules()
    {
        $userId = $this->id;

        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($userId),
            ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            
        ];
    }

    public function resetInput(){
        $this->name = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        session()->forget('success');
    }

    public function addNewUser()
    {
        $this->id= Auth::user()->id;
        $this->validate();
        try {
            
    
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
            ]);


            

            session()->flash('success', [
                'title' => 'Parabéns!',
                'message' => 'Cadastrado com sucesso!'
            ]);
            
            

        } catch (\Throwable $th) {
            session()->flash('error', [
                'title' => 'Aconteceu algo!',
                'message' => 'deu ruim'
            ]);
        }
        

        
    }

    
    public function render()
    {
        return view('livewire.add-user');
    }
}


// 'name' => 'required|string|max:255',
//                 'email' => 'required|string|email|max:255|unique:'.User::class,
//                 'password' => ['required', 'confirmed', Rules\Password::defaults()],
                

            