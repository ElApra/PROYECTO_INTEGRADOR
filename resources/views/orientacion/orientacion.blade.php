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
            background-color: #808080;
        }
        .testimonials h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #4267B2;
        }
        .testimonials .testimonial-item {
            text-align: center;
            padding: 20px;
            margin: 10 100px;
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
    <title>Orientación</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Profesores</h1>
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://peru21.pe/resizer/oAxzP3wXJJu_FTlEIlfvbAFLc9A=/580x330/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/NHGH6X3LBZHTTJ2WUESBGPAPV4.jpg" class="card-img-top" alt="Profesor 1">
                    <div class="card-body">
                        <h5 class="card-title">Profesor Jirafales</h5>
                        <p class="card-text">Especialista en Matemáticas</p>
                        <a href="{{ route('orientacion.show', ['id' => 1]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://media.timeout.com/images/105453534/image.jpg" class="card-img-top" alt="Profesor 2">
                    <div class="card-body">
                        <h5 class="card-title">Profesora María López</h5>
                        <p class="card-text">Especialista en Ciencias</p>
                        <a href="{{ route('orientacion.show', ['id' => 2]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://hips.hearstapps.com/hmg-prod/images/profesor-chiflado-1570218917.jpg" class="card-img-top" alt="Profesor 3">
                    <div class="card-body">
                        <h5 class="card-title">Profesor Carlos García</h5>
                        <p class="card-text">Especialista en Historia</p>
                        <a href="{{ route('orientacion.show', ['id' => 3]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://cdn2.chicmagazine.com.mx/uploads/media/2023/05/14/ellos-son-los-maestros-del.jpg" class="card-img-top" alt="Profesor 4">
                    <div class="card-body">
                        <h5 class="card-title">Profesor Martínez</h5>
                        <p class="card-text">Especialista en Física</p>
                        <a href="{{ route('orientacion.show', ['id' => 4]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://images.ecestaticos.com/Xg4lK7IufEiYj5ZH3zivHw78erk=/0x62:1251x769/1338x752/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2F47a%2Fc1d%2Ff66%2F47ac1df669dd66d669d59e33a479f6bd.jpg" class="card-img-top" alt="Profesor 5">
                    <div class="card-body">
                        <h5 class="card-title">Profesor Luis Fernández</h5>
                        <p class="card-text">Especialista en Literatura</p>
                        <a href="{{ route('orientacion.show', ['id' => 5]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card">
                    <img src="https://mott.pe/noticias/wp-content/uploads/2016/07/Los-maestros-m%C3%A1s-recordados-que-dejaron-marca-en-el-cine-y-la-televisi%C3%B3n-06.jpg" class="card-img-top" alt="Profesor 6">
                    <div class="card-body">
                        <h5 class="card-title">Profesor Gómez Herandez</h5>
                        <p class="card-text">Especialista en Química</p>
                        <a href="{{ route('orientacion.show', ['id' => 6]) }}" class="btn btn-primary">Ver más</a>
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



