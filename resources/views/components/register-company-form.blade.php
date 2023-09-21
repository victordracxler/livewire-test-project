<form class=" dark:bg-gray-800" style="padding: 30px 30px; border-radius: 10px">
        
        
    <!-- Name -->
    <div>
        <x-input-label for="razao" :value="__('Razão Social')" />
        <x-text-input id="razao" class="block mt-1 w-full" type="text" name="razao" required autofocus wire:model="razao" />
        <x-input-error :messages="$errors->get('razao')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="fantasia" :value="__('Nome Fantasia')" />
        <x-text-input id="fantasia" class="block mt-1 w-full" type="text" name="fantasia" required autofocus wire:model="fantasia" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="documento" :value="__('CPF ou CNPJ')" />
        <x-text-input id="documento" class="block mt-1 w-full" type="text" name="documento" required autofocus wire:model="documento" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="phone" :value="__('Telefone')" />
        <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" required autofocus wire:model="phone" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="cell" :value="__('Celular')" />
        <x-text-input id="cell" class="block mt-1 w-full" type="text" name="cell" required autofocus wire:model="cell" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="uf" :value="__('Estado')" />
        <x-text-input id="uf" class="block mt-1 w-full" type="text" name="uf" required autofocus wire:model="uf" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="city" :value="__('Cidade')" />
        <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" required autofocus wire:model="city" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="address" :value="__('Endereço')" />
        <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" required autofocus wire:model="address" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="complemento" :value="__('Complemento')" />
        <x-text-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" required autofocus wire:model="complemento" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="neighborhood" :value="__('Bairro')" />
        <x-text-input id="neighborhood" class="block mt-1 w-full" type="text" name="neighborhood" required autofocus wire:model="neighborhood" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="cep" :value="__('CEP')" />
        <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" required autofocus wire:model="cep" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"  required wire:model="email"/>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="representante" :value="__('Representante')" />
        <x-text-input id="representante" class="block mt-1 w-full" type="text" name="representante" required autofocus wire:model="representante" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="logo" :value="__('Logo')" />
        <x-text-input id="logo" class="block mt-1 w-full" type="text" name="logo" required autofocus wire:model="logo" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="status" :value="__('status')" />
        <select id="status" class="block mt-1 w-full form-select" type="text" name="status" required autofocus wire:model="status" >
            <option value="">status</option>
            <option value="active">active</option>
            <option value="inactive">inactive</option>
        </select>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="company_type" :value="__('tipo de companhia')" />
        <select id="company_type" class="block mt-1 w-full form-select" type="text" name="company_type" required autofocus wire:model="company_type" >
            <option value="">tipo de companhia</option>
            <option value="Interno">Interno</option>
            <option value="cliente">cliente</option>
            <option value="fornecedor">fornecedor</option>
            <option value="teste">teste</option>
        </select>
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

 


    

    <div class="flex items-center justify-center mt-4">
       

        <x-primary-button  class="ml-4" wire:click.prevent="addNewCompany" style="margin-top: 15px">
            {{ __('Cadastrar nova empresa') }}
        </x-primary-button>
    </div>
</form>