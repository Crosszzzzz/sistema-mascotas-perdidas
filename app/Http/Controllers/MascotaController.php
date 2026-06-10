<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Usuario;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index()
    {
        $mascotas = Mascota::with('usuario')->get();

        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        $usuarios = Usuario::all();

        return view('mascotas.create', compact('usuarios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:50',
            'tipo' => 'required|max:30',
            'raza' => 'required|max:50',
            'color' => 'required|max:50',
            'usuario_id' => 'required|exists:usuarios,id'
        ]);

        Mascota::create($request->all());

        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota registrada correctamente');
    }

    public function edit($id)
    {
        $mascota = Mascota::findOrFail($id);

        $usuarios = Usuario::all();

        return view('mascotas.edit', compact('mascota', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        $mascota = Mascota::findOrFail($id);

        $request->validate([
            'nombre' => 'required|max:50',
            'tipo' => 'required|max:30',
            'raza' => 'required|max:50',
            'color' => 'required|max:50',
            'usuario_id' => 'required|exists:usuarios,id'
        ]);

        $mascota->update($request->all());

        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota actualizada');
    }

    public function destroy($id)
    {
        Mascota::destroy($id);

        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota eliminada');
    }
}