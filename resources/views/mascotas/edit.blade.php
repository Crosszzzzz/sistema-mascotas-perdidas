@extends('layouts.app')

@section('contenido')

<h2>Editar Mascota</h2>

@if ($errors->any())

<div class="alert alert-danger">
    <ul class="mb-0">

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>
</div>

@endif

<form action="{{ route('mascotas.update', $mascota->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text"
               name="nombre"
               class="form-control"
               value="{{ old('nombre', $mascota->nombre) }}">
    </div>

    <div class="mb-3">
        <label>Tipo</label>
        <input type="text"
               name="tipo"
               class="form-control"
               value="{{ old('tipo', $mascota->tipo) }}">
    </div>

    <div class="mb-3">
        <label>Raza</label>
        <input type="text"
               name="raza"
               class="form-control"
               value="{{ old('raza', $mascota->raza) }}">
    </div>

    <div class="mb-3">
        <label>Color</label>
        <input type="text"
               name="color"
               class="form-control"
               value="{{ old('color', $mascota->color) }}">
    </div>

    <div class="mb-3">
        <label>Características Especiales</label>
        <textarea name="caracteristicas_especiales"
                  class="form-control"
                  rows="3">{{ old('caracteristicas_especiales', $mascota->caracteristicas_especiales) }}</textarea>
    </div>

    <div class="mb-3">
        <label>Dueño</label>

        <select name="usuario_id"
                class="form-control">

            @foreach($usuarios as $usuario)

                <option value="{{ $usuario->id }}"
                    {{ $usuario->id == $mascota->usuario_id ? 'selected' : '' }}>
                    {{ $usuario->nombre }}
                </option>

            @endforeach

        </select>

    </div>

    <button type="submit"
            class="btn btn-primary">
        Actualizar
    </button>

    <a href="{{ route('mascotas.index') }}"
       class="btn btn-secondary">
       Cancelar
    </a>

</form>

@endsection