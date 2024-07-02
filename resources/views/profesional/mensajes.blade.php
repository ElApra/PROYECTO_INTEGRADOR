@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Mensajes</h1>
        
        <!-- Enviar nuevo mensaje -->
        <div class="mb-6">
            <form action="{{ route('mensajes.store') }}" method="POST">
                @csrf
                <div class="flex items-center mb-4">
                    <input type="text" name="asunto" placeholder="Asunto" class="px-4 py-2 border rounded mr-2 w-full">
                </div>
                <div class="flex items-center mb-4">
                    <textarea name="contenido" placeholder="Contenido del mensaje" class="px-4 py-2 border rounded mr-2 w-full"></textarea>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Enviar</button>
            </form>
        </div>
        
        <!-- Bandeja de entrada -->
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-2xl font-semibold mb-4">Bandeja de Entrada</h2>
            <ul>
                @foreach($mensajes as $mensaje)
                    <li class="border-b py-2">
                        <h3 class="text-xl font-bold">{{ $mensaje->asunto }}</h3>
                        <p>{{ $mensaje->contenido }}</p>
                        @if ($mensaje->remitente)
                            <p class="text-sm text-gray-500">Enviado por: {{ $mensaje->remitente->name }} - {{ $mensaje->created_at }}</p>
                        @else
                            <p class="text-sm text-gray-500">Enviado por: Remitente desconocido - {{ $mensaje->created_at }}</p>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</body>
</html>
@endsection
