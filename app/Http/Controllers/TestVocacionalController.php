<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestVocacionalController extends Controller
{
    public function guardarRespuestas(Request $request)
    {
        // Aquí procesa las respuestas recibidas
        // Ejemplo básico: calcular un promedio y devolver una sugerencia de carrera
        $promedio = ($request->idP1 + $request->idP2 + $request->idP3 + $request->idP4 + $request->idP5 +
                     $request->idP6 + $request->idP7 + $request->idP8 + $request->idP9 + $request->idP10) / 10;

        // Determina la sugerencia de carrera basada en el promedio
        if ($promedio >= 2.5) {
            $carrera = 'Ingeniería en Sistemas';
        } else {
            $carrera = 'Administración de Empresas';
        }

        // Devuelve la respuesta como JSON
        return response()->json(['mensaje' => 'Deberías considerar la carrera de ' . $carrera]);
    }
}
