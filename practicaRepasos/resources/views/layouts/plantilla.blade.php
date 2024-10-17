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
    <img src="{{asset('images\Logo_upq.png')}}" alt="Logo UPQ" class="img-fluid rounded m-auto d-block m-4 p-2">
 
    @yield('contenido')
    </div>
</body>
</html>