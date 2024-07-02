<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ChambaTest </title>
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
       
        .features {
            text-align: center;
            padding: 100px 0;
        }
       
        .features .feature-item img {
            width: 200px;
            height: 200px;
            margin-bottom: 20px;
        }


        .features .feature-item h3 {
            font-size: 24px;
            color: #0000FF;
        }


        p{
            font-size: 21px;
           
            color: white;
        }


        .testimonials h2 {
            text-align: center;
            margin-bottom: 40px;
            color: #FFFFFF;
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
            font-size: 20px;
            color: white;
        }
     
        .footer {
            background-color: #808080;
            color: white;
            text-align: center;
            padding: 20px 0;
        }
        .footer a {
            color: #FFFFFF;
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
           
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>


                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf


                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</div>
</nav>


    <style>
        @import url(https://fonts.googleapis.com/css?family=Khula:700);


        body {
            background: #111;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }


        .console-container {
            font-family: 'Khula', sans-serif;
            font-size: 4em;
            text-align: center;
            height: 200px;
            width: 80%;
            max-width: 600px;
            margin: 100px auto;
            color: white;
            position: relative;
        }


        @keyframes blink {
            50% { opacity: 0; }
        }


        .hidden {
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="console-container">
        <h1 id="text">Encuentra tu camino hacia el éxito profesional con ChambaTest</h1>
       
        <div id="console" class="console-underscore">_</div>
    </div>


    <script>
        window.onload = function() {
            consoleText([
                'Encuentra tu camino hacia el éxito profesional con ChambaTest',
                'Descubre tus habilidades y explora las mejores opciones de carrera'
            ], 'text', ['tomato', 'rebeccapurple', 'lightblue']);
        };


        function consoleText(words, id, colors) {
            if (colors === undefined) colors = ['#fff'];
            var visible = true;
            var con = document.getElementById('console');
            var letterCount = 1;
            var x = 1;
            var waiting = false;
            var target = document.getElementById(id);
            target.setAttribute('style', 'color:' + colors[0]);
            window.setInterval(function() {
                if (letterCount === 0 && waiting === false) {
                    waiting = true;
                    target.innerHTML = words[0].substring(0, letterCount);
                    window.setTimeout(function() {
                        var usedColor = colors.shift();
                        colors.push(usedColor);
                        var usedWord = words.shift();
                        words.push(usedWord);
                        x = 1;
                        target.setAttribute('style', 'color:' + colors[0]);
                        letterCount += x;
                        waiting = false;
                    }, 1000);
                } else if (letterCount === words[0].length + 1 && waiting === false) {
                    waiting = true;
                    window.setTimeout(function() {
                        x = -1;
                        letterCount += x;
                        waiting = false;
                    }, 1000);
                } else if (waiting === false) {
                    target.innerHTML = words[0].substring(0, letterCount);
                    letterCount += x;
                }
            }, 120);
            window.setInterval(function() {
                if (visible === true) {
                    con.className = 'console-underscore hidden';
                    visible = false;
                } else {
                    con.className = 'console-underscore';
                    visible = true;
                }
            }, 400);
        }
    </script>
</body>


    <div class="features container">
        <div class="row">
            <div class="col-md-3 feature-item">
                <img src="https://www.talenttunity.com/wp-content/uploads/2020/09/tests-aptitudes.jpg" alt="Evaluaciones de Aptitudes">
                <h3>Evaluaciones de Aptitudes</h3>
                <p>Descubre tus habilidades con nuestras pruebas especializadas</p>
                <a href="{{ url('/evaluaciones') }}" class="btn btn-outline-primary">Comenzar Evaluación</a>
            </div>
            <div class="col-md-3 feature-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7I_IDRHg88jFtVVpeyAuyH3Mxbox06WRH7g&s" alt="Explorar Carreras">
                <h3>Explorar Carreras</h3>
                <p>Encuentra la carrera ideal para ti</p>
                <a href="{{ url('/explorar-carreras') }}" class="btn btn-outline-primary">Explorar Carreras</a>
            </div>
           
            <div class="col-md-3 feature-item">
                <img src="https://static.vecteezy.com/system/resources/previews/008/064/275/non_2x/professional-ophthalmologist-doctor-african-american-man-helping-young-woman-african-american-client-to-choose-a-spectacles-is-successful-the-girl-is-glad-to-have-new-glasses-photo.jpg" alt="Orientación Personalizada">
                <h3>Orientación Personalizada</h3>
                <p>Recibe asesoría profesional basada en tus resultados</p>
                <a href="{{ url('/orientacion') }}" class="btn btn-outline-primary">Recibir Orientación</a>
            </div>
            <div class="col-md-3 feature-item">
                <img src="https://media.licdn.com/dms/image/D5612AQFjEDeOF796_g/article-cover_image-shrink_600_2000/0/1711122555273?e=2147483647&v=beta&t=v-H4fRwtKb6yZBnCGMGkUsNuta3g2a3NaVQrX-p2s0Q" alt="Recursos para el Desarrollo Profesional">
                <h3>Recursos para el Desarrollo Profesional</h3>
                <p>Accede a artículos, tutoriales y videos para tu crecimiento profesional</p>
                <a href="{{ url('/recursos') }}" class="btn btn-outline-primary">Ver Recursos</a>
            </div>
        </div>
    </div>


    <div class="testimonials container">
        <h2>Testimonios de Usuarios</h2>
        <div class="row">
            <div class="col-md-4 testimonial-item">
                <img src="https://pbs.twimg.com/media/EKk-xUzXkAIT6jV.jpg" alt="Usuario" style="width: 100px;">
                <p>"ChambaTest me ayudó a encontrar la carrera perfecta para mí. ¡Es increíble!"</p>
                <p><strong>- Lionel Andrés Messi Cuccittini</strong></p>
            </div>
            <div class="col-md-4 testimonial-item">
                <img src="https://gestion.pe/resizer/yEWmUNrKtrBttCQlrUI9_J4HMt8=/1200x1200/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/NXYKEHDEBBAP3IOKMHGY5O3PZ4.jpg" alt="Usuario" style="width: 100px;">
                <p>"Las evaluaciones de aptitudes son precisas y muy útiles. ¡Totalmente recomendado!"</p>
                <p><strong>- Cristiano Ronaldo dos Santos Aveiro</strong></p>
            </div>
            <div class="col-md-4 testimonial-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Mark_Zuckerberg_em_setembro_de_2014.jpg/220px-Mark_Zuckerberg_em_setembro_de_2014.jpg" alt="Usuario" style="width: 100px;">
                <p>"Gracias a ChambaTest, conseguí orientación personalizada y me siento más seguro de mi futuro profesional."</p>
                <p><strong>- Mark Elliot Zuckerberg</strong></p>
            </div>
            <div class="col-md-4 testimonial-item">
                <img src="https://cdn.urbantecno.com/urbantecno/s/2023-01-05-11-27-elon-musk.png" alt="Usuario" style="width: 100px;">
                <p>"Gracias a ChambaTest, conseguí orientación personalizada y me siento más seguro de mi futuro profesional."</p>
                <p><strong>- Elon Reeve Musk</strong></p>
            </div>
        </div>
   


<footer class="footer">
    <div class="container">
        <p>ChambaTest - Orientación Profesional</p>
        <div class="footer-links">
            <a href="#">Términos de Servicio</a>
            <a href="#">Política de Privacidad</a>
            <a href="#">Contáctanos</a>
        </div>
    </div>
</footer>


  <!-- Bootstrap JavaScript and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>


</html>

