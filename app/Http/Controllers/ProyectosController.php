<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto;

class ProyectosController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('profesional.proyectos', compact('proyectos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Proyecto::create($request->only('nombre'));

        return redirect()->route('proyectos.index');
    }

    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('profesional.edit', compact('proyecto'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->only('nombre'));

        return redirect()->route('proyectos.index');
    }

    public function destroy($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('proyectos.index');
    }
}
