@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar proyecto</h1>

    <form action="{{ route('proyectos.update', $proyecto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Campo del formulario para nombre -->
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $proyecto->nombre }}" required>
        </div>

        <!-- Botón de guardar cambios -->
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>
@endsection
