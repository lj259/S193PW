<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/fondo.css') }}">
    @vite(['resources/js/app.js'])
    
    <title>@yield('titulo')</title>
</head>
<body>
    <!--Inicia Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href=" {{ route('rutaInicio') }}" class="navbar-brand">Turista sin Maps</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('rutaForm') }}" class="nav-link" aria-current="page" href="#">Registro Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('rutaClientes') }}" class="nav-link" >Consulta Clientes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Termina Navbar-->

    @yield('contenido')

</body>
</html>