@extends('layouts.app')

@section('contenido')

<div class="d-flex justify-content-between mb-3">

    <h2>Reportes</h2>

    <a href="{{ route('reportes.create') }}"
       class="btn btn-primary">
        Nuevo Reporte
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
            <th>Mascota</th>
            <th>Fecha Pérdida</th>
            <th>Zona</th>
            <th>Estado</th>
            <th>Recompensa</th>
            <th>Acciones</th>
        </tr>

    </thead>

    <tbody>

        @forelse($reportes as $reporte)

        <tr>

            <td>{{ $reporte->id }}</td>
            <td>{{ $reporte->mascota->nombre }}</td>
            <td>{{ $reporte->fecha_perdida }}</td>
            <td>{{ $reporte->zona_barrio }}</td>
            <td>{{ $reporte->estado }}</td>
            <td>Bs {{ $reporte->recompensa }}</td>

            <td>

                <a href="{{ route('reportes.edit', $reporte->id) }}"
                   class="btn btn-warning btn-sm">
                    Editar
                </a>

                <form action="{{ route('reportes.destroy', $reporte->id) }}"
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
                No existen reportes
            </td>
        </tr>

        @endforelse

    </tbody>

</table>

@endsection