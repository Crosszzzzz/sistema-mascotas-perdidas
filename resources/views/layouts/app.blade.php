<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Mascotas Perdidas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background-color:#f4f6f9;
        }

        .navbar{
            box-shadow:0 2px 10px rgba(0,0,0,.1);
        }

        .card{
            border:none;
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand fw-bold" href="/">
            🐾 Sistema Mascotas Perdidas
        </a>

        <div>

            <a href="{{ route('usuarios.index') }}"
               class="btn btn-outline-light me-2">
                Usuarios
            </a>

            <a href="{{ route('mascotas.index') }}"
               class="btn btn-outline-light me-2">
                Mascotas
            </a>

            <a href="{{ route('reportes.index') }}"
               class="btn btn-outline-light">
                Reportes
            </a>

        </div>

    </div>
</nav>

<div class="container mt-4">
    @yield('contenido')
</div>

</body>
</html>