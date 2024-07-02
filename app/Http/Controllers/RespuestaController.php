<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;

class RespuestaController extends Controller
{
    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            'idP1' => 'required|integer',
            'idP2' => 'required|integer',
            'idP3' => 'required|integer',
            'idP4' => 'required|integer',
            'idP5' => 'required|integer',
            'idP6' => 'required|integer',
            'idP7' => 'required|integer',
            'idP8' => 'required|integer',
            'idP9' => 'required|integer',
            'idP10' => 'required|integer',
        ]);

        // Lógica para determinar la carrera basada en las respuestas
        $total = array_sum($validatedData);
        
        if ($total >= 10) {
            $carrera = 'Ingeniería';
        } else {
            $carrera = 'Ciencias Sociales';
        }

        // Guardar las respuestas y la carrera sugerida en la base de datos
        $respuesta = new Respuesta();
        $respuesta->fill(array_merge($validatedData, ['carrera_sugerida' => $carrera]));
        $respuesta->save();

        return response()->json(['mensaje' => 'Respuestas y carrera sugerida guardadas correctamente.', 'carrera' => $carrera]);
    }
}
