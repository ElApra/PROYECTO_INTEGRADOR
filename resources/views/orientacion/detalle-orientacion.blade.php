<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Profesor</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $profesor['nombre'] }}</h1>
        <p><strong>Especialidad:</strong> {{ $profesor['especialidad'] }}</p>
        <p><strong>Estudios:</strong> {{ $profesor['estudio'] }}</p>
        <p><strong>Descripción:</strong> {{ $profesor['descripcion'] }}</p>
        <p><strong>Cursos que imparte:</strong> {{ $profesor['cursos'] }}</p>
        <p><strong>Logros:</strong> {{ $profesor['logros'] }}</p>
        <a href="{{ route('orientacion.index') }}" class="btn btn-secondary">Volver</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



