@extends('layouts.plantilla')
@section('titulo','Convertidor')
@section('contenido')
<div class="container-fluid">
    <H1>Repaso 1</H1>
    <p>Pagina repaso</p>
<form action="{{route('rutaMG')}}" method="POST">@csrf

    <div class="mb-3">
        <label class="form-label">MB a GB</label>
        <input type="number" class="form-control" name="numero" placeholder="Introduce un numero a Convertir de MB a GB">
    </div>
        <h1>Resultado: {{$conversionMG ?? '0'}}</h1>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form action="{{route('rutaGM')}}" method="POST">@csrf

    <div class="mb-3">
        <label class="form-label">GB a MB</label>
        <input type="number" class="form-control" name="numero" placeholder="Introduce un numero a Convertir de GB a MG">
    </div>
        <h1>Resultado: {{$conversionGM ?? '0'}}</h1>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form action="{{route('rutaGT')}}" method="POST">@csrf

    <div class="mb-3">
        <label class="form-label">GB a TB</label>
        <input type="number" class="form-control" name="numero" placeholder="Introduce un numero a Convertir de GB a TB">
    </div>
        <h1>Resultado: {{$conversionGT ?? '0'}}</h1>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<form action="{{route('rutaTG')}}" method="POST">@csrf

    <div class="mb-3">
        <label class="form-label">TB a GB</label>
        <input type="number" class="form-control" name="numero" placeholder="Introduce un numero a Convertir de TB a GB">
    </div>
        <h1>Resultado: {{$conversionTG ?? '0'}}</h1>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection