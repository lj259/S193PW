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
            <input type="number" class="form-control" name="Isbn" value="{{old('Isbn')}}">
            <small class="text-danger fst-italic">{{$errors->first('Isbn')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" name="Titulo" value="{{old('Titulo')}}" >
            <small class="text-danger fst-italic">{{$errors->first('Titulo')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Autor</label>
            <input type="text" class="form-control" name="Autor" value="{{old('Autor')}}" >
            <small class="text-danger fst-italic">{{$errors->first('Autor')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Paginas</label>   
            <input type="number" class="form-control" name="Paginas" value="{{old('Paginas')}}" >
            <small class="text-danger fst-italic">{{$errors->first('Paginas')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Año</label>
            <input type="number" class="form-control" name="Años" value="{{old('Años')}}" >
            <small class="text-danger fst-italic">{{$errors->first('Años')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Editorial</label>
            <input type="text" class="form-control" name="Editorial" value="{{old('Editorial')}}" >
            <small class="text-danger fst-italic">{{$errors->first('Editorial')}}</small>
        </div>
        <div class="mb-3 text-center">
            <label class="form-label">Email de la Editorial</label>
            <input type="email" class="form-control" name="Correo" value="{{old('Correo')}}" >
            <small class="text-danger fst-italic">{{$errors->first('Correo')}}</small>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Libro</button>
    </form>

</div>
@endsection