<div class="py-12">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Definir empresa de usuário') }}
        </h2>
    </x-slot>


    <div class="max-w-7xl mx-auto sm:px-6 lg:px-20" style="color: white">

        <h2 style="font-size: 20px">Qual usuário pertence a qual empresa</h2>
        
        <div>
            <label for="user">Selecione um usuário(label):</label>
            <select wire:model="selectedUser" style="color: gray">
                <option value="">Selecione um usuário(placeholder)</option>
                @foreach ($usersList as $id => $user)
                    <option value="{{ $user->id}}">{{ $user->name }}</option>
                @endforeach
            </select>
        
            <h1>{{$selectedUser }}</h1>
            @if ($selectedUser)
                <p>Você selecionou: {{ $usersList[$selectedUser] }}</p>
            @endif
        </div>
        

        

    </div>


</div>
