@extends('layouts.app')

@section('contenido')

<div class="d-flex justify-content-between mb-3">
    <h2>Mascotas</h2>

    <a href="{{ route('mascotas.create') }}"
       class="btn btn-primary">
        Nueva Mascota
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<table class="table table-bordered">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Raza</th>
            <th>Color</th>
            <th>Dueño</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>

        @forelse($mascotas as $mascota)

        <tr>
            <td>{{ $mascota->id }}</td>
            <td>{{ $mascota->nombre }}</td>
            <td>{{ $mascota->tipo }}</td>
            <td>{{ $mascota->raza }}</td>
            <td>{{ $mascota->color }}</td>
            <td>{{ $mascota->usuario->nombre }}</td>

            <td>

                <a href="{{ route('mascotas.edit', $mascota->id) }}"
                   class="btn btn-warning btn-sm">
                    Editar
                </a>

                <form action="{{ route('mascotas.destroy', $mascota->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        Eliminar
                    </button>

                </form>

            </td>
        </tr>

        @empty

        <tr>
            <td colspan="7" class="text-center">
                No existen mascotas
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection