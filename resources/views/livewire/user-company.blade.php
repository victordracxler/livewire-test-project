<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Definir empresa de usuário') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-20" style="color: white">

        <h2 style="font-size: 20px">Qual usuário pertence a qual empresa</h2>

        <div class=" dark:bg-gray-800" style="display: flex; flex-direction: column; padding: 20px; border-radius: 10px; margin-top: 20px">
            <div style="display: flex; flex-direction: column; margin:20px">
                <label for="user">Selecione um usuário(label):</label>
                <select class="form-select" wire:model="selectedUser" style="color: gray"
                    wire:change="handleSelectChangeUser">
                    <option value="">Selecione um usuário(placeholder)</option>
                    @foreach ($usersList as $id => $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>

                <h1>Isso é o selected user Id: {{ $selectedUser }}</h1>



            </div>

            <div style="display: flex; flex-direction: column;  margin:20px">
                <label for="user">Selecione uma empresa(label):</label>
                <select class='form-select' wire:model="selectedCompany" style="color: gray"
                    wire:change="handleSelectChangeCompany">
                    <option value="">Selecione uma empresa(placeholder)</option>
                    @foreach ($companyList as $id => $company)
                        <option value="{{ $company->id }}">{{ $company->razao }}</option>
                    @endforeach
                </select>

                <h1>Isso é o selected company Id: {{ $selectedCompany }}</h1>


            </div>

            <x-primary-button  class="ml-4" wire:click.prevent="updateUserCompanyId" style="margin-top: 15px">Pronto</x-primary-button>

        </div>



    </div>


</div>
