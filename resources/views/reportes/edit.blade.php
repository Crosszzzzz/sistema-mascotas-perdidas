@extends('layouts.app')

@section('contenido')

<h2>Editar Reporte</h2>

@if ($errors->any())

<div class="alert alert-danger">

    <ul class="mb-0">

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>

@endif

<form action="{{ route('reportes.update', $reporte->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">

        <label>Mascota</label>

        <select name="mascota_id"
                class="form-control">

            @foreach($mascotas as $mascota)

                <option value="{{ $mascota->id }}"
                    {{ $mascota->id == $reporte->mascota_id ? 'selected' : '' }}>

                    {{ $mascota->nombre }}

                </option>

            @endforeach

        </select>

    </div>

    <div class="mb-3">

        <label>Fecha de pérdida</label>

        <input type="date"
               name="fecha_perdida"
               class="form-control"
               value="{{ old('fecha_perdida', $reporte->fecha_perdida) }}">

    </div>

    <div class="mb-3">

        <label>Zona o Barrio</label>

        <input type="text"
               name="zona_barrio"
               class="form-control"
               value="{{ old('zona_barrio', $reporte->zona_barrio) }}">

    </div>

    <div class="mb-3">

        <label>Estado</label>

        <select name="estado"
                class="form-control">

            <option value="Perdido"
                {{ $reporte->estado == 'Perdido' ? 'selected' : '' }}>
                Perdido
            </option>

            <option value="Encontrado"
                {{ $reporte->estado == 'Encontrado' ? 'selected' : '' }}>
                Encontrado
            </option>

        </select>

    </div>

    <div class="mb-3">

        <label>Recompensa</label>

        <input type="number"
               step="0.01"
               name="recompensa"
               class="form-control"
               value="{{ old('recompensa', $reporte->recompensa) }}">

    </div>

    <button type="submit"
            class="btn btn-primary">
        Actualizar
    </button>

    <a href="{{ route('reportes.index') }}"
       class="btn btn-secondary">
        Cancelar
    </a>

</form>

@endsection