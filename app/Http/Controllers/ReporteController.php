<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\Mascota;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $reportes = Reporte::with('mascota')->get();

        return view('reportes.index', compact('reportes'));
    }

    public function create()
    {
        $mascotas = Mascota::all();

        return view('reportes.create', compact('mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha_perdida' => 'required|date',
            'zona_barrio' => 'required|max:100',
            'estado' => 'required',
            'recompensa' => 'required|numeric',
            'mascota_id' => 'required|exists:mascotas,id'
        ]);

        Reporte::create($request->all());

        return redirect()->route('reportes.index')
            ->with('success', 'Reporte registrado correctamente');
    }

    public function edit($id)
    {
        $reporte = Reporte::findOrFail($id);

        $mascotas = Mascota::all();

        return view('reportes.edit', compact('reporte', 'mascotas'));
    }

    public function update(Request $request, $id)
    {
        $reporte = Reporte::findOrFail($id);

        $request->validate([
            'fecha_perdida' => 'required|date',
            'zona_barrio' => 'required|max:100',
            'estado' => 'required',
            'recompensa' => 'required|numeric',
            'mascota_id' => 'required|exists:mascotas,id'
        ]);

        $reporte->update($request->all());

        return redirect()->route('reportes.index')
            ->with('success', 'Reporte actualizado');
    }

    public function destroy($id)
    {
        Reporte::destroy($id);

        return redirect()->route('reportes.index')
            ->with('success', 'Reporte eliminado');
    }
}