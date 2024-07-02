<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /**
     * Redirige a los usuarios a su dashboard basado en su rol.
     */
    public function redirectBasedOnRole()
    {
        $role = Auth::user()->role;


        switch ($role) {
            case 'profesor':
                return redirect()->route('dashboard-profesor');
            case 'alumno':
                return redirect()->route('dashboard-alumno');
            default:
                return redirect('/'); // Redirigir a la página de inicio por defecto si el rol no coincide
        }
    }


    /**
     * Muestra el dashboard para los alumnos.
     */
    public function alumno()
    {
        return view('dashboard-alumno');
    }


    /**
     * Muestra el dashboard para los profesores.
     */
    public function profesor()
    {
        return view('dashboard-profesor');
    }
}



