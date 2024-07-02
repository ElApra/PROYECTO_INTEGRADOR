<?php

// app/Http/Controllers/ProfesionalController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    public function dashboard()
    {
        return view('dashboard-profesor');
    }

    public function proyectos()
    {
        return view('profesional.proyectos');
    }

    public function tareas()
    {
        return view('profesional.tareas');
    }

    public function mensajes()
    {
        return view('profesional.mensajes');
    }
}
