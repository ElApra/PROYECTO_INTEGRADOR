@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Profesor</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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


        img {text-align: center;
            margin-bottom: 40px;
            color: #FFFFFF;
            width: 100px;
            height: 100px;
        }

        
* {
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

body {
  align-items:center;
  min-width: none;
  background:#0d0f1b;
  overflow:hidden;


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
<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Bienvenido al Dashboard</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Card de Bienvenida -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">¡Hola, {{ Auth::user()->name }}!</h2>
                <p class="text-gray-700">Bienvenido al Dashboard de Profesores.</p>
            </div>
            
            <!-- Card de Estadísticas -->
            <div class="bg-white p-4 rounded shadow">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/proyectos') }}">Proyectos</a>
                    </li>
                
            </div>
            
            <!-- Card de Calendario -->
            <div class="bg-white p-4 rounded shadow">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/mensajes') }}">Mensajes</a>
                    </li>
                
            </div>
            
            <!-- Card de Mensajes -->
            <div class="bg-white p-4 rounded shadow">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/alumnos') }}">Alumnos</a>
                    </li>
                <ul>
                <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
                </ul>
            </div>
            
            
            
            <!-- Card de Configuración -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold mb-2">Configuración</h2>
                <ul>
    
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-blue-500 hover:text-blue-700">Cerrar Sesión</a></li>
                </ul>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
