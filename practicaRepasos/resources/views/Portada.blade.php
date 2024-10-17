@extends('layouts.plantilla')
@section('titulo','Portada')
@section('contenido')
@csrf
<img src="{{asset('images\Logo_upq.png')}}" alt="Logo UPQ" class="img-fluid rounded m-auto d-block m-4 p-2">
 
<div class="d-flex justify-content-center">
    <x-card 
    titulo="Practica Repaso" 
    nombre="Luis Javier Rodríguez Hernández" 
    materia="Programación web" 
    profesor="Iván Isay Guerra López" 
    grupo="S193"></x-card>
</div>
<a href="{{route('rutaRepaso1')}}" role="button" class="btn btn-primary btn-lg">REPASO 1</a>

@endsection