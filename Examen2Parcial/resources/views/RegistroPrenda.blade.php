<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Prendas</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
@session('EXITO')
    <script>
        Swal.fire({
        title: "Respuesta del Servidor!",
        text: '{{$value}}',
        icon: "success"
        });
    </script>
    @endsession
    <div class="container">
        <h1><strong>Registro de prendas</strong></h1>
        <form action="/Registrar" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Prenda</label>
                <input
                    type="text"
                    class="form-control"
                    name="Prenda"
                    value="{{old('Prenda')}}"
                />
                <small class="form-text text-danger"><strong>{{$errors->first('Prenda')}}</strong></small>
            </div>
            <div class="mb-3">
            <label class="form-label">Color</label>
                <input
                    type="text"
                    class="form-control"
                    name="Color"
                    value="{{old('Color')}}"
                />
                <small class="form-text text-danger"><strong>{{$errors->first('Color')}}</strong></small>
            
                </div>
            <div class="mb-3">
                <label class="form-label">Cantidad</label>
                <input
                    type="text"
                    class="form-control"
                    name="Cantidad"
                    value="{{old('Cantidad')}}"
                />
                <small class="form-text text-danger"><strong>{{$errors->first('Cantidad')}}</strong></small>
            </div>
            <div class="d-grid gap-2">
                <button
                    type="submit"
                    class="btn btn-primary"
                >
                    Registrar
                </button>
            </div>
            
        </form>
    </div>
</body>
</html>