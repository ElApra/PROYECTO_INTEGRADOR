<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la Carrera</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $carrera['nombre'] }}</h1>
        <p><strong>Descripción:</strong> {{ $carrera['descripcion'] }}</p>
        <p><strong>Duración:</strong> {{ $carrera['duracion'] }} años</p>
        <p><strong>Campo de trabajo:</strong> {{ $carrera['campo'] }}</p>
        <p><strong>Universidades:</strong> {{ $carrera['universidades'] }}</p>
        <a href="{{ route('carreras.index') }}" class="btn btn-secondary">Volver</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



