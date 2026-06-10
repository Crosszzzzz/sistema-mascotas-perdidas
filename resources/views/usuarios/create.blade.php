@extends('layouts.app')

@section('contenido')

<h2>Registrar Usuario</h2>

@if ($errors->any())

<div class="alert alert-danger">

    <ul class="mb-0">

        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    </ul>

</div>

@endif

<form action="{{ route('usuarios.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text"
               name="nombre"
               class="form-control"
               value="{{ old('nombre') }}">
    </div>

    <div class="mb-3">
        <label>Teléfono</label>
        <input type="text"
               name="telefono"
               class="form-control"
               value="{{ old('telefono') }}">
    </div>

    <div class="mb-3">
        <label>Correo</label>
        <input type="email"
               name="correo"
               class="form-control"
               value="{{ old('correo') }}">
    </div>

    <div class="mb-3">
        <label>Ciudad</label>
        <input type="text"
               name="ciudad"
               class="form-control"
               value="{{ old('ciudad') }}">
    </div>

    <button type="submit" class="btn btn-success">
        Guardar
    </button>

    <a href="{{ route('usuarios.index') }}"
       class="btn btn-secondary">
       Cancelar
    </a>

</form>

@endsection