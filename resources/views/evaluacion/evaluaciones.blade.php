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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Test Vocacional</title>
    <style>
        body {
            background-color: #C5C6C7;
        }
        #styleE {
            color: #212529;
            text-align: center;
        }
        #inicio {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }
        #indicacion {
            font-size: 18px;
        }
        form {
            margin-top: 10px;
        }
        #resultado {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <main>
        <div>
            <p id="inicio">Test Vocacional</p>
            <div>
                <p id="indicacion">Seleccione las respuestas y después presione el <strong>botón de evaluar</strong>. <br><br>
                Cada pregunta está basada en una habilidad del perfil de <strong>ingreso</strong> de cada carrera que oferta la Universidad Nacional Tecnológica.</p>
            </div>
        </div>
        <div>
        <div>
                <p><strong>1. ¿Se te da con facilidad resolver problemas de la vida cotidiana?</strong></p>
                <form name="FORMP1">
                    <input type="radio" id="idP1R1" name="idP1" value="1">
                    <label for="No">a) No.</label><br>
                    <input type="radio" id="idP1R2" name="idP1" value="2">
                    <label for="No">b) Sí.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>2. ¿Una de tus mayores virtudes es el razonamiento lógico-matemático?</p>
                </strong>
                <form name="FORMP2">
                    <input type="radio" id="idP2R1" name="idP2" value="1">
                    <label for="No">a) No, no se me da.</label><br>
                    <input type="radio" id="idP2R2" name="idP2" value="2">
                    <label for="No">b) Sí, pero no soy tan bueno.</label><br>
                    <input type="radio" id="idP2R3" name="idP2" value="3">
                    <label for="No">c) Sí, soy excelente.</label>
                </form>
            </div>
            <div>
                <p><strong>3. ¿Disfrutas hacer experimentos y trabajo de laboratorio?</strong></p>
                <form name="FORMP3">
                    <input type="radio" id="idP3R1" name="idP3" value="1">
                    <label for="No">a) Poco.</label><br>
                    <input type="radio" id="idP3R2" name="idP3" value="2">
                    <label for="No">b) Sí.</label><br>
                    <input type="radio" id="idP3R3" name="idP3" value="3">
                    <label for="No">c) Bastante.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>4. ¿Te sientes capacitado para contribuir a un mejor rendimiento de una empresa?</p>
                </strong>
                <form name="FORMP4">
                    <input type="radio" id="idP4R1" name="idP4" value="1">
                    <label for="No">a) Poco.</label><br>
                    <input type="radio" id="idP4R2" name="idP4" value="2">
                    <label for="No">b) Sí.</label><br>
                    <input type="radio" id="idP4R3" name="idP4" value="3">
                    <label for="No">c) Mucho.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>5. ¿Te mantienes al día de la nuevas tendencias tecnológicas?</p>
                </strong>
                <form name="FORMP5">
                    <input type="radio" id="idP5R1" name="idP5" value="1">
                    <label for="No">a) No lo hago.</label><br>
                    <input type="radio" id="idP5R2" name="idP5" value="2">
                    <label for="No">b) A veces.</label><br>
                    <input type="radio" id="idP5R3" name="idP5" value="3">
                    <label for="No">c) Sí, bastante.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>6. ¿Consideras que eres emprendedor?</p>
                </strong>
                <form name="FORMP6">
                    <input type="radio" id="idP6R1" name="idP6" value="1">
                    <label for="No">a) No.</label><br>
                    <input type="radio" id="idP6R2" name="idP6" value="2">
                    <label for="No">b) Tal vez.</label><br>
                    <input type="radio" id="idP6R3" name="idP6" value="3">
                    <label for="No">c) Sí, me considero emprendedor.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>7. ¿De qué nivel es tu conocimiento geográfico?</p>
                </strong>
                <form name="FORMP7">
                    <input type="radio" id="idP7R1" name="idP7" value="1">
                    <label for="No">a) Bajo.</label><br>
                    <input type="radio" id="idP7R2" name="idP7" value="2">
                    <label for="No">b) Normal.</label><br>
                    <input type="radio" id="idP7R3" name="idP7" value="3">
                    <label for="No">c) Alta.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>8. ¿Tienes liderazgo al trabajar en grupo?</p>
                </strong>
                <form name="FORMP8">
                    <input type="radio" id="idP8R1" name="idP8" value="1">
                    <label for="No">a) No, dejo que otros decidan.</label><br>
                    <input type="radio" id="idP8R2" name="idP8" value="2">
                    <label for="No">b) Solo tomo la iniciativa cuando nadie más quiere.</label><br>
                    <input type="radio" id="idP8R3" name="idP8" value="3">
                    <label for="No">c) Sí, soy un líder nato.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>9. ¿Posees conocimientos en electrónica y robótica?</p>
                </strong>
                <form name="FORMP9">
                    <input type="radio" id="idP9R1" name="idP9" value="1">
                    <label for="No">a) No.</label><br>
                    <input type="radio" id="idP9R2" name="idP9" value="2">
                    <label for="No">b) Estoy aprendiendo.</label><br>
                    <input type="radio" id="idP9R3" name="idP9" value="3">
                    <label for="No">c) Sí, tengo bases sólidas.</label>
                </form>
            </div>
            <div>
                <strong>
                    <p>10. ¿Te interesa y se te da el cálculo y la geometría?</p>
                </strong>
                <form name="FORMP10">
                    <input type="radio" id="idP10R1" name="idP10" value="1">
                    <label for="No">a) No es mi fuerte.</label><br>
                    <input type="radio" id="idP10R2" name="idP10" value="2">
                    <label for="No">b) Solo un poco.</label><br>
                    <input type="radio" id="idP10R3" name="idP10" value="3">
                    <label for="No">c) Sí, se me da muy bien.</label>
                </form>
            </div>
            <button onclick="guardarRespuestas()">Evaluar</button>
        <p id="resultado"></p>
    </div>

    <script>
        function guardarRespuestas() {
            let respuestas = {
                idP1: getRadioValue('idP1'),
                idP2: getRadioValue('idP2'),
                idP3: getRadioValue('idP3'),
                idP4: getRadioValue('idP4'),
                idP5: getRadioValue('idP5'),
                idP6: getRadioValue('idP6'),
                idP7: getRadioValue('idP7'),
                idP8: getRadioValue('idP8'),
                idP9: getRadioValue('idP9'),
                idP10: getRadioValue('idP10')
            };

            fetch("{{ route('guardar.respuestas') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(respuestas)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok ' + response.statusText);
                }
                return response.json();
            })
            .then(data => {
                document.getElementById('resultado').innerHTML = 'Respuestas guardadas correctamente. Carrera sugerida: Ingeneria' ;
            })
            .catch(error => {
                console.error('Error al enviar los datos:', error);
                document.getElementById('resultado').innerHTML = 'Error al enviar los datos. Ver consola para más detalles.';
            });
        }

        function getRadioValue(name) {
            let selectedValue = null;
            const options = document.getElementsByName(name);
            for (const option of options) {
                if (option.checked) {
                    selectedValue = option.value;
                    break;
                }
            }
            return selectedValue;
        }
    </script>
</body>
</html>