@extends('layouts.plantilla')
@section('titulo','Noticias')
@section('contenido')
@session('Exito')
    <script>
        Swal.fire({
        title: "Respuesta del Servidor!",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
    @endsession
<div class="container-fluid d-flex justify-content-center align-items-center">

    <form action="/GuardarLibro" method="POST" class="w-50">
    @csrf
        <div class="mb-3 text-center">
            <label class="form-label text-center">ISBN</label>
            <input type="number" class="form-control" name="Isbn" value="{{old('Isbn')}}" required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" name="Titulo" value="{{old('Titulo')}}"  required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control" name="Autor" value="{{old('Autor')}}"  required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Paginas</label>   
            <input type="number" class="form-control" name="Paginas" value="{{old('Paginas')}}"  required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Año</label>
            <input type="number" class="form-control" name="Años" value="{{old('Años')}}"  required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Editorial</label>
            <input type="text" class="form-control" name="Editorial" value="{{old('Editorial')}}"  required>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Email de la Editorial</label>
            <input type="email" class="form-control" name="Correo" value="{{old('Correo')}}"  required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Libro</button>
    </form>

</div>
@endsection