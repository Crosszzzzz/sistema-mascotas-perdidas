@extends('layouts.app')

@section('contenido')

<h2>Registrar Mascota</h2>

<form action="{{ route('mascotas.store') }}"
      method="POST">

@csrf

<div class="mb-3">
    <label>Nombre</label>
    <input type="text"
           name="nombre"
           class="form-control">
</div>

<div class="mb-3">
    <label>Tipo</label>
    <input type="text"
           name="tipo"
           class="form-control">
</div>

<div class="mb-3">
    <label>Raza</label>
    <input type="text"
           name="raza"
           class="form-control">
</div>

<div class="mb-3">
    <label>Color</label>
    <input type="text"
           name="color"
           class="form-control">
</div>

<div class="mb-3">
    <label>Características</label>
    <textarea name="caracteristicas_especiales"
              class="form-control"></textarea>
</div>

<div class="mb-3">

    <label>Dueño</label>

    <select name="usuario_id"
            class="form-control">

        @foreach($usuarios as $usuario)

            <option value="{{ $usuario->id }}">
                {{ $usuario->nombre }}
            </option>

        @endforeach

    </select>

</div>

<button class="btn btn-success">
    Guardar
</button>

</form>

@endsection