<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('titulo')</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="d-flex flex-column m-4">
    @yield('contenido')
    </div>
</body>
</html>