@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Listado de Alumnos</h3>
        </div>
        <div class="border-t border-gray-200">
            <ul class="divide-y divide-gray-200">
                @forelse ($alumnos as $alumno)
                <li class="px-4 py-4 sm:px-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <!-- Placeholder para una imagen de perfil si la tienes -->
                            <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-gray-900">{{ $alumno->name }}</p>
                            <p class="text-sm text-gray-500">{{ $alumno->email }}</p>
                        </div>
                    </div>
                </li>
                @empty
                <li class="px-4 py-4 sm:px-6">
                    <div class="flex items-center">
                        <p class="text-sm text-gray-500">No hay alumnos registrados.</p>
                    </div>
                </li>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
