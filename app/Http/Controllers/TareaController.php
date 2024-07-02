<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tareas = Tarea::all();
        return view('profesional.tareas', compact('tareas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'descripcion' => 'required|string|max:255',
        ]);

        Tarea::create([
            'descripcion' => $request->descripcion,
            'completada' => false, // Por defecto la tarea no está completada
        ]);

        return redirect()->route('profesional.tareas.index')->with('success', 'Tarea creada correctamente.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        $tarea->update([
            'completada' => $request->has('completada'), // Marca como completada si se marca el checkbox
        ]);

        return redirect()->route('profesional.tareas.index')->with('success', 'Estado de tarea actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();

        return redirect()->route('profesional.tareas.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
