@extends('layouts.app')

@section('contenido')

<div class="p-5 mb-4 bg-primary text-white rounded-3 shadow">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">
            Sistema de Reporte de Mascotas Perdidas
        </h1>

        <p class="col-md-8 fs-5">
            Plataforma para registrar mascotas perdidas, publicar reportes
            y ayudar a las familias a encontrar a sus mascotas.
        </p>

        <a href="{{ route('reportes.index') }}" class="btn btn-light btn-lg">
            Ver Reportes
        </a>
    </div>
</div>

<div class="row">

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body text-center">
                <h2></h2>
                <h4>Usuarios</h4>
                <p>
                    Gestiona los propietarios de mascotas.
                </p>

                <a href="{{ route('usuarios.index') }}"
                   class="btn btn-primary">
                    Administrar
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body text-center">
                <h2></h2>
                <h4>Mascotas</h4>
                <p>
                    Registra mascotas y sus características.
                </p>

                <a href="{{ route('mascotas.index') }}"
                   class="btn btn-success">
                    Administrar
                </a>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
            <div class="card-body text-center">
                <h2></h2>
                <h4>Reportes</h4>
                <p>
                    Publica y consulta reportes de pérdida.
                </p>

                <a href="{{ route('reportes.index') }}"
                   class="btn btn-danger">
                    Administrar
                </a>
            </div>
        </div>
    </div>

</div>

<div class="card shadow mt-3">
    <div class="card-body">
        <h4>Objetivo del Sistema</h4>
        <p>
            Este sistema permite registrar mascotas extraviadas,
            almacenar información de sus dueños y gestionar reportes
            para facilitar su localización.
        </p>
    </div>
</div>

@endsection