@extends('layouts.app')

@section('contenido')

<h2>Editar Usuario</h2>

@if ($errors->any())

<div class="alert alert-danger">

    <ul class="mb-0">

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>

@endif

<form action="{{ route('usuarios.update', $usuario->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text"
               name="nombre"
               class="form-control"
               value="{{ old('nombre', $usuario->nombre) }}">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text"
               name="telefono"
               class="form-control"
               value="{{ old('telefono', $usuario->telefono) }}">
    </div>

    <div class="mb-3">
        <label>Correo</label>
        <input type="email"
               name="correo"
               class="form-control"
               value="{{ old('correo', $usuario->correo) }}">
    </div>

    <div class="mb-3">
        <label>Ciudad</label>
        <input type="text"
               name="ciudad"
               class="form-control"
               value="{{ old('ciudad', $usuario->ciudad) }}">
    </div>

    <button type="submit" class="btn btn-primary">
        Actualizar
    </button>

    <a href="{{ route('usuarios.index') }}"
       class="btn btn-secondary">
       Cancelar
    </a>

</form>

@endsection