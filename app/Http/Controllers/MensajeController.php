<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes = Mensaje::orderBy('created_at', 'desc')->get();
        return view('profesional.mensajes', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mensajes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'asunto' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        Mensaje::create([
            'asunto' => $request->asunto,
            'contenido' => $request->contenido,
            'remitente_id' => auth()->id(), // Asegúrate de tener el campo remitente_id en tu tabla de mensajes
        ]);

        return redirect()->route('mensajes.index')->with('success', 'Mensaje enviado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mensaje $mensaje)
    {
        return view('mensajes.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mensaje $mensaje)
    {
        return view('mensajes.edit', compact('mensaje'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        $request->validate([
            'asunto' => 'required|string|max:255',
            'contenido' => 'required|string',
        ]);

        $mensaje->update([
            'asunto' => $request->asunto,
            'contenido' => $request->contenido,
        ]);

        return redirect()->route('mensajes.index')->with('success', 'Mensaje actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();

        return redirect()->route('mensajes.index')->with('success', 'Mensaje eliminado correctamente.');
    }
}
