@extends('layouts.plantilla')

@section('titulo','Registro Clientes')

@section('contenido')

{{-- @dump($id) --}}


<div class="container mt-5 col-md-6">
    @if(session('Exito'))
    <x-Alert tipo="success">{{session('Exito')}}</x-Alert>
    @endif
    @session('Exito')
    <x-Alert tipo="warning">{{$value}}</x-Alert>
    @endsession
    @session('Exito')
    <script>
        Swal.fire({
        title: "Respuesta del Servidor!",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
    @endsession
    <div class="card font-monospace">
        <div class="card-header fs-5 text-center text-primary">
            Registro de Clientes
        </div>
        <div class="card-body text-justify">
            <form action="/enviarCliente" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" name="txtnombre">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido:</label>
                    <input type="text" class="form-control" name="txtapellido">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="text" class="form-control" name="txtcorreo">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" name="txttelefono">
                </div>
                <div class="d-grid gap-2 mt-2 mb-1">
                    <button type="submit" class="btn btn-success btn-sm">Guardar Cliente</button>
                </div>
            </form>
        </div>
        <div class="card-footer text-muted"></div>
    </div>
</div>
@endsection