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




/* Estilos para los acordeones */
.card {
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


.card-header {
    background-color: #4267B2;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
}


.card-header h2 {
    margin: 0;
    font-size: 18px;
}


.card-body {
    padding: 18px 20px;
    margin-bottom: 200px;
}


.card-body ul {
    list-style: none;
    padding-left: 0;
}


.card-body ul li {
    margin-bottom: 10px;
}


.card-body ul li a {
    color: #4267B2;
    text-decoration: none;
    transition: color 0.3s ease;
}


.card-body ul li a:hover {
    color: #FF2D20;
}


/* Estilos para los botones de los acordeones */
.btn-link {
    text-decoration: none;
    color: #4267B2;
    font-weight: bold;
    font-size: 16px;
    padding: 10px 20px;
    display: block;
    text-align: left;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    transition: background-color 0.3s ease;
}


.btn-link:hover {
    background-color: #E0E0E0;
    color: #FF2D20;
}


.collapsed .btn-link::after {
    content: ' ▼';
}


.btn-link[aria-expanded="true"]::after {
    content: ' ▲';
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
    <title>Recursos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Recursos</h1>
        <div class="accordion" id="recursosAccordion">
            <!-- Documentos PDF -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Documentos PDF
                        </button>
                    </h2>
                </div>


                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#recursosAccordion">
                    <div class="card-body">
                        <ul>
                            <li><a href="https://repository.uniminuto.edu/bitstream/10656/10822/1/Libro_Gu%C3%ADa%20practica%20de%20investigaci%C3%B3n%20en%20ingenier%C3%ADa_2020.pdf" target="_blank">Guia de Ingeneria</a></li>
                            <li><a href="https://tecno8demarzo.weebly.com/uploads/5/6/7/6/56762661/t3_materiales_de_construcci%C3%93n.pdf" target="_blank">Materiales de Ingeniería Civil</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Tutoriales en Video -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Tutoriales en Video
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#recursosAccordion">
                    <div class="card-body">
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=MGbGzMxxC78" target="_blank">Tutorial de Soldadura </a></li>
                            <li><a href="https://www.youtube.com/watch?v=TGIp0jehZXE" target="_blank">Historia de un emprendedor</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Biblioteca Digital -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Biblioteca Digital
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#recursosAccordion">
                    <div class="card-body">
                        <ul>
                            <li><a href="https://www.youtube.com/watch?v=KXYEkdF8i2k" target="_blank">Acceso a libros electrónicos</a></li>
                            <li><a href="https://www.youtube.com/watch?v=YL98fk1pE6Q&list=PLmIB7uA74Vvaub8PVR2Tj3B6_Wq1wr21Y" target="_blank">Bases de datos académicas</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Herramientas de Aprendizaje -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Herramientas de Aprendizaje
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#recursosAccordion">
                    <div class="card-body">
                        <ul>
                            <li><a href="https://www.pucv.cl/uuaa/negocioseconomia/articulos-en-revistas-especializadas" target="_blank">Artículos recientes en revistas especializadas</a></li>
                            <li><a href="https://industria-web.es/" target="_blank">Blogs y sitios web de la industria</a></li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- Herramientas y Software -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Herramientas y Software
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#recursosAccordion">
                    <div class="card-body">
                        <ul>
                            <li><a href="https://www.instagantt.com/es/gestion-de-proyectos/las-12-mejores-herramientas-de-desarrollo-de-software" target="_blank">Herramientas oftware recomendados</a></li>
                        </ul>
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



