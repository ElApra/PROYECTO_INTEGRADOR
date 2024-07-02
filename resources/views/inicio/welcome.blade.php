<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChambaTest - Orientación Profesional</title>
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
            text-align: center;
            height: 200px;
            width: 80%;
            max-width: 600px;
            margin: 100px auto;
            color: white;
            position: relative;
        }


        .console-container h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }


        .console-container p {
            font-size: 1.5em;
        }


        .console-underscore {
            display: inline-block;
            position: absolute;
            bottom: -0.1em;
            left: 10px;
            animation: blink .75s infinite step-end;
        }


        @keyframes blink {
            50% { opacity: 0; }
        }


        .hidden {
            opacity: 0;
        }
        /* Navbar styles */
        nav {
            display: flex;
            justify-content: flex-end;
            padding: 10px;
            background-color: #333;
        }


        nav a {
            color: white;
            text-decoration: none;
            padding: 8px 12px;
            margin-left: 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }


        nav a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <nav>
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Inicia Sesion</a>


                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Registrate</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>


    <div class="console-container">
        <h1 id="text">Encuentra tu camino hacia el éxito profesional con ChambaTest</h1>
       
        <div id="console" class="console-underscore">_</div>
    </div>


    <script>
        window.onload = function() {
            consoleText([
                'Descubre tu potencial hoy mismo. Regístrate para obtener información personalizada sobre tu futuro profesional.',
                'Registrate como estudainte o profesional',
               
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
</html>



