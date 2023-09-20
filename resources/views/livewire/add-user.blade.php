<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cadastrar novos usuários') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-20" style="color: white">

        <h2 style="font-size: 20px">Dados do usuário</h2>
        @if (session()->has('success'))
        @include('alert')

        <x-primary-button wire:click.prevent="resetInput" class="ml-4">Cadastrar outro Usuário</x-primary-button>
        @else
        @include('auth.register-third')

        @endif
        

        

    </div>


</div>
