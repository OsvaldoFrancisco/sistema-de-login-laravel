<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="p-6 text-gray-900">
                        Olá <strong>{{Auth::user()->name}}</strong>
                    </p>
                </div>
                <div class="p-6 text-gray-900">
                    <table class ="table-auto w-full">
                        <thead class="bg-gray-100 text-left">
                            <tr>
                                <th class="p-2">Nome</th>
                                <th>Email</th>
                                <th>Telemóvel</th>
                                <th>Cadastrado Por</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cleintes as $cliente) 
                                <tr class="hover:bg-gray-100">
                                    <td class="p-2">{{$cliente->nome}}</td>
                                    <td class="p-2">{{$cliente->email}}</td>
                                    <td class="p-2">{{$cliente->telemovel}}</td>
                                    <td class="p-2">{{$cliente->user->name}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="bg-gray-100 rounded p-2 mb-4">
                        {{$cleintes->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>