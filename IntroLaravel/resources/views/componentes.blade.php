@extends('layouts.plantilla')

@section('titulo','Componentes Blade')

@section('contenido')
<x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Guardar">
    Soy el contenido de la primera tarjeta
</x-Card>
<x-Card encabezado="Componente 2" titulo="Dinamico 2" textoBoton="No Guardar">
    Soy el contenido de la segunda tarjeta
    
</x-Card>
@endsection