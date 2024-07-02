<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Respuesta;  // Asegúrate de importar el modelo Respuesta

class TestController extends Controller
{
    public function guardarRespuestas(Request $request)
    {
        // Validar las respuestas (puedes personalizar esta validación)
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

        // Crear una nueva respuesta en la base de datos
        $respuesta = Respuesta::create($validatedData);

        return response()->json(['mensaje' => 'Respuestas guardadas correctamente'], 200);
    }
}
