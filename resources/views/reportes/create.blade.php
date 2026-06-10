@extends('layouts.app')

@section('contenido')

<h2>Registrar Reporte</h2>

<form action="{{ route('reportes.store') }}"
      method="POST">

@csrf

<div class="mb-3">
    <label>Mascota</label>

    <select name="mascota_id"
            class="form-control">

        @foreach($mascotas as $mascota)

        <option value="{{ $mascota->id }}">
            {{ $mascota->nombre }}
        </option>

        @endforeach

    </select>
</div>

<div class="mb-3">
    <label>Fecha de pérdida</label>

    <input type="date"
           name="fecha_perdida"
           class="form-control">
</div>

<div class="mb-3">
    <label>Zona o Barrio</label>

    <input type="text"
           name="zona_barrio"
           class="form-control">
</div>

<div class="mb-3">
    <label>Estado</label>

    <select name="estado"
            class="form-control">

        <option value="Perdido">Perdido</option>
        <option value="Encontrado">Encontrado</option>

    </select>
</div>

<div class="mb-3">
    <label>Recompensa</label>

    <input type="number"
           step="0.01"
           name="recompensa"
           class="form-control">
</div>

<button class="btn btn-success">
    Guardar
</button>

</form>

@endsection