<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources\js\app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('rutaPrincipal')}}">Principal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('rutaRegistro')}}">Registro</a>
        </li>
      </ul>
      <span class="navbar-text">
        Navbar text with an inline element
      </span>
    </div>
  </div>
</nav>

@yield('contenido')

<footer class="bg-dark text-white text-center text-lg-start mt-auto">
      <div class="text-center p-3">
          <div class="container">
              <span>&copy; {{ date('Y') }} Biblioteca la Oaxaqueña. Todos los derechos reservados.</span>
              <br>
              <small>{{ date('d') }} de {{ date('F') }} del {{ date('Y') }}</small>
          </div>
      </div>
  </footer>

</body>
</html>