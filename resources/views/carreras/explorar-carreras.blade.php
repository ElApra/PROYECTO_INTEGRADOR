<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChambaTest - Orientación Profesional</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #808080;
        }
        .navbar {
            background-color: #808080;
        }
        .navbar-brand {
            color: white;
            font-size: 32px;
            margin-left: -80px;
        }
        .navbar-brand:hover {
            color: white;
        }
        .navbar-nav .nav-link {
            color: white;
           
        }
        .navbar-nav .nav-link:hover {
            color: white;
        }
        .hero {
            text-align: center;
            padding: 50px 0;
            background: url('https://img.freepik.com/foto-gratis/concepto-educacion-estudiante-estudiar-brainstorming-campus-concepto-cerca-estudiantes-que-discuten-su-tema-libros-o-libros-texto-enfoque-selectivo_1418-627.jpg') no-repeat center center;
            background-size: cover;
            color: white;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }
        .hero .btn {
            font-size: 18px;
            padding: -10px 30px;
        }
        .features {
            text-align: center;
            padding: 50px 0;
        }
        .features .feature-item {
            margin-bottom: 30px;
        }
        .features .feature-item img {
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }
        .features .feature-item h3 {
            font-size: 24px;
            color: #4267B2;
        }
        .testimonials {
            padding: 50px 0;
            background-color: #f0f2f5;
        }
        .testimonials h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #4267B2;
        }
        .testimonials .testimonial-item {
            text-align: center;
            padding: 20px;
            margin: 0 10px;
        }
        .testimonials .testimonial-item img {
            border-radius: 50%;
            margin-bottom: 20px;
            width: 100px;
            height: 100px;
        }
        .testimonials .testimonial-item p {
            font-size: 18px;
        }
        .register-section {
            text-align: center;
            padding: 50px 0;
        }
        .register-section form {
            max-width: 600px;
            margin: 0 auto;
        }
        .footer {
            background-color: #4267B2;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .footer a {
            color: white;
            margin: 0 10px;
        }
        * {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}


body {
  font-family: sans-serif
}


ul {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  li {
    list-style: none;
    a {
      position: relative;
      display: block;
      text-transform: uppercase;
      margin: 20px 0;
      padding: 10px 20px;
      text-decoration: none;
      color: #262626;
      font-family: sans-serif;
      font-size: 18px;
      font-weight: 600;
      transition: .5s;
      z-index: 1;
      &:before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-top: 2px solid #262626;
        border-bottom: 2px solid #262626;
        transform: scaleY(2);
        opacity: 0;
        transition: .3s;
      }
      &:after {
        content: '';
        position: absolute;
        top: 2px;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #262626;
        transform: scale(0);
        opacity: 0;
        transition: .3s;
        z-index: -1;
      }
      &:hover {
        color: #fff;
        &:before {
          transform: scaleY(1);
          opacity: 1;
        }
        &:after {
          transform: scaleY(1);
          opacity: 1;
        }
      }
    }
  }
}
    </style>
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://w7.pngwing.com/pngs/611/676/png-transparent-social-science-orientacion-vocacional-introspecta-humanities-psico-logo-engineering-psychology.png" alt="ChambaTest Logo" style="height: 50px;"> ChambaTest
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/explorar-carreras') }}">Explorar Carreras</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/evaluaciones') }}">Evaluaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/orientacion') }}">Orientación Personalizada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/recursos') }}">Recursos</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- de aca es lo de abajo no tacar cesar mono no pensante -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingeniería</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Ingeniería</h1>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://www.autonoma.pe/wp-content/uploads/2024/02/Ingenieri%CC%81a-Biome%CC%81dica.jpg" class="card-img-top" alt="Ingeniería de Llenado de Techo de Calamina">
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería Biomédica</h5>
                        <a href="{{ route('carreras.show', ['id' => 1]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://micarrerauniversitaria.com/wp-content/uploads/2018/02/ingenieria-administrativa-22.jpg" class="card-img-top" alt="Ingeniería de Apuestas">
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería en Ciencia de la Administración</h5>
                        <a href="{{ route('carreras.show', ['id' => 2]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://w7.pngwing.com/pngs/345/278/png-transparent-architectural-engineering-civil-engineering-construction-engineering-structural-engineering-construction-building-company-service.png" class="card-img-top" alt="Soldadura de madera">
                    <div class="card-body">
                        <h5 class="card-title">Ingeneria Civil Arquitectonica</h5>
                        <a href="{{ route('carreras.show', ['id' => 3]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://blog.uch.edu.pe/wp-content/uploads/2023/01/Ingenieria-Industrial-uch-universidad_estudiar.jpg" class="card-img-top" alt="Ingeniería en Armado de Vasitos">
                    <div class="card-body">
                        <h5 class="card-title">Ingeniería Industrial</h5>
                        <a href="{{ route('carreras.show', ['id' => 4]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://utec.edu.pe/sites/default/files/blog/ingeniero_quimico_quien_es_que_hace_y_en_donde_trabaja.jpg" class="card-img-top" alt="Mecánico de Transformers">
                    <div class="card-body">
                        <h5 class="card-title">Ingeneria Quimica</h5>
                        <a href="{{ route('carreras.show', ['id' => 5]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://www.emagister.com/blog/wp-content/uploads/2019/04/GettyImages-1146417905.jpg" class="card-img-top" alt="Piloto de carrito anticuchero">
                    <div class="card-body">
                        <h5 class="card-title">Ingeneria de Sistemas</h5>
                        <a href="{{ route('carreras.show', ['id' => 6]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingeniería</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Ingeniería</h1>
        <div class="row">
            <!-- Tu código existente aquí -->
        </div>
        <div class="mt-5">
            <a href="{{ route('recursos.index') }}" class="btn btn-info">Ver Recursos</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



