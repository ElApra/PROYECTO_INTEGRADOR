@extends('layouts.app')

@section('content')
   
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Proyectos</h1>
        
        <!-- Crear nuevo proyecto -->
        <div class="mb-6">
            <form action="{{ route('proyectos.store') }}" method="POST">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="nombre" placeholder="Nombre del proyecto" class="px-4 py-2 border rounded mr-2">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Crear</button>
                </div>
            </form>
        </div>
        
        <!-- Listado de proyectos -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-2xl font-semibold mb-4">Lista de Proyectos</h2>
            <ul>
                @foreach($proyectos as $proyecto)
                    <li class="border-b py-2 flex justify-between items-center">
                        <span>{{ $proyecto->nombre }}</span>
                        <div>
                            <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="text-blue-500 mr-2">Editar</a>
                            <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Eliminar</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
