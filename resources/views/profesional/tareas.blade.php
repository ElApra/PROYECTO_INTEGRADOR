@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tareas</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Tareas</h1>
        
        <!-- Crear nueva tarea -->
        <div class="mb-6">
            <form action="{{ route('profesional.tareas.store') }}" method="POST">
                @csrf
                <div class="flex items-center">
                    <input type="text" name="descripcion" placeholder="Descripción de la tarea" class="px-4 py-2 border rounded mr-2">
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Agregar</button>
                </div>
            </form>
        </div>
        
        <!-- Listado de tareas -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-2xl font-semibold mb-4">Lista de Tareas</h2>
            <ul>
                @forelse($tareas as $tarea)
                    <li class="border-b py-2 flex justify-between items-center">
                        <span>{{ $tarea->descripcion }}</span>
                        <div>
                            <form action="{{ route('profesional.tareas.update', $tarea->id) }}" method="POST" class="inline">
                                @csrf
                                @method('PUT')
                                <input type="checkbox" name="completada" onchange="this.form.submit()" {{ $tarea->completada ? 'checked' : '' }}>
                            </form>
                            <form action="{{ route('profesional.tareas.destroy', $tarea->id) }}" method="POST" class="inline ml-2">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500">Eliminar</button>
                            </form>
                        </div>
                    </li>
                @empty
                    <li>No hay tareas registradas.</li>
                @endforelse
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
