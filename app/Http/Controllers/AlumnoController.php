<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumnos = User::where('role', 'alumno')->get(); // Filtra usuarios con rol 'alumno'
        return view('alumnos.index', compact('alumnos'));
    }
}
