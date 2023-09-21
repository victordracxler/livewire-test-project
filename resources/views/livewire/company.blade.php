<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Empresas') }}
        </h2>
    </x-slot>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <br>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" style="color: white">

        <br>
        <div style="display: flex">
            <button wire:click='load' class="add-company-bttn">
                Carregar
            </button>
    
            <button wire:click="limpar" class="add-company-bttn">
                Limpar lista
            </button>
    
            <button wire:click='openForm' class="add-company-bttn">
                Adicionar nova empresa
            </button>
        </div>
        



        @if($company === null && $formState)

        @include('components.register-company-form')

        @elseif ($company && !$formState)

        <ul>
            @foreach ($company as $item)
                <div
                    style="font-size:20px; background-color: #b6b6b6; border-radius: 5px; width: 300px; height:150px; display: flex; align-items:center; justify-content:center; margin-bottom:10px">
                    <li>
                        <h1>Nome:{{ $item->razao }}</h1>
                        <h2>CNPJ:{{ $item->documento }}</h2>
                    </li>
                </div>
            @endforeach
        </ul>

        @else

        <h2>Sem companhias</h2>

        @endif



    </div>


</div>
