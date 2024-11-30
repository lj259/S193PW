@extends('layouts.plantilla')

@section('titulo','Clientes')

@section('contenido')
  <div class="container mt-5 col-md-8">
    @foreach($consulta as $cliente)
    <div class="card text-justify font-monospace">
      <div class="card-header fs-5 text-primary">
        {{$cliente->nombre}} - {{$cliente->apellido}} 
      </div>
      <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}} </h5>
        <p class="card-text fw-lighter">{{$cliente->telefono}} </p>
        <p class="card-text fw-lighter"></p>
      </div>
      <a href="{{route('cliente.edit',[$cliente->id])}}" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
      <form action="{{route('cliente.destroy',[$cliente->id])}}" method="post"
      id="Eliminar_cliente_{{$cliente->id}}"
      class="my-2">
      @method("DELETE")
      @csrf
      <button type="submit" class="btn btn-danger btn-sm" onclick='confirmarEliminacion({{$cliente->id}})'>{{__('Eliminar')}}</button>
      </form>
    </div>
    @endforeach
  </div>

  <script>
function confirmarEliminacion(clienteId) {
    Swal.fire({
        title: '¿Seguro que desea eliminar el registro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Cancelar',
        confirmButtonText: '¡Sí, eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(`Eliminar_cliente_${clienteId}`).submit(); 
        }
    });
}

</script>


@endsection