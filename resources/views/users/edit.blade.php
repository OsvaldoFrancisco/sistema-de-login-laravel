<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Editando nível de acesso do Usuário <strong>{{$user->name}}</strong></p>
                    <p>Nível de acesso actual: <strong>{{$user->level}}</strong></p>
                </div>
                <div class="p-6 text-gray-900">
                    <form action="{{route('users.update',$user->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="level">Seleccione o Nível</label>
                        <select name="level" class="py-1 px-8 rounded" required>
                            <option value="selected disabled" >Selecionar</option>
                            <option value="user">Usuário Comum</option>
                            <option value="admin">Administrador</option>
                        </select>
                        <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4">
                            <i class="fa-regular fa-floppy-disk mr-2"></i> Gravar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>