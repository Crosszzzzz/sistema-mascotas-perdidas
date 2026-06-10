@extends('layouts.app')

@section('contenido')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Lista de Usuarios</h2>

    <a href="{{ route('usuarios.create') }}" class="btn btn-primary">
        Nuevo Usuario
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-bordered table-hover">

    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Ciudad</th>
            <th width="180">Acciones</th>
        </tr>
    </thead>

    <tbody>

        @forelse($usuarios as $usuario)

        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->correo }}</td>
            <td>{{ $usuario->ciudad }}</td>

            <td>

                <a href="{{ route('usuarios.edit', $usuario->id) }}"
                   class="btn btn-warning btn-sm">
                    Editar
                </a>

                <form action="{{ route('usuarios.destroy', $usuario->id) }}"
                      method="POST"
                      style="display:inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('¿Desea eliminar este usuario?')">
                        Eliminar
                    </button>

                </form>

            </td>
        </tr>

        @empty

        <tr>
            <td colspan="6" class="text-center">
                No existen usuarios registrados
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection