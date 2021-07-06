@extends('layouts.app')

@section('content')
<div id="idtabla">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Productos comprados</h2>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Comprador</th>
            <th>Nombre producto comprado</th>
            <th>Imagen</th>
            <th>Estado</th>
            @guest
            @else
            @if(Auth::user()->rol == "ADMIN")
            <th>Accion</th>
            @endif
            @endguest
        </tr>
        @foreach ($productos as $producto)
            @if(Auth::user()->rol == "ADMIN") 
            <tr>
                <td>{{ App\User::find($producto->idUsuario)->name }}</td>
                <td>{{App\Blog::find($producto->idProducto)->title }}</td>
                <td><img width="140px" height="140px" src="{{App\Blog::find($producto->idProducto)->url }}"></td>
                <td>{{ $producto->estado }}</td>
                @guest
                @else
                @if(Auth::user()->rol == "ADMIN")
                <td>
                    <select class="form-control" name="opciones{{ $producto->id }}" aria-label="Default select example">
                        <option value="PREPARACION">PREPARACION</option>
                        <option value="ENVIADO">ENVIADO</option>
                        <option value="RECIBIDO">RECIBIDO</option>
                    </select>
                    </br>
                    <button class="btn btn-success save-data" data-value1="{{ $producto->id }}">Cambiar estado</button>
                </td>
                @endif
                @endguest
            </tr>
            @elseif($producto->idUsuario == Auth::user()->id)
                <tr>
                    <td>{{ App\User::find($producto->idUsuario)->name }}</td>
                    <td>{{App\Blog::find($producto->idProducto)->title }}</td>
                    <td><img width="140px" height="140px" src="{{App\Blog::find($producto->idProducto)->url }}"></td>
                    <td>{{ $producto->estado }}</td>
                    @guest
                    @else
                    @if(Auth::user()->rol == "ADMIN")
                    <td>
                        <select class="form-control" name="opciones{{ $producto->id }}" aria-label="Default select example">
                            <option value="PREPARACION">PREPARACION</option>
                            <option value="ENVIADO">ENVIADO</option>
                            <option value="RECIBIDO">RECIBIDO</option>
                        </select>
                        </br>
                        <button class="btn btn-success save-data" data-value1="{{ $producto->id }}">Cambiar estado</button>
                    </td>
                    @endif
                    @endguest
                </tr>
            @endif
        @endforeach
    </table>


</div>

<script>

$(document).ready(function() {
    $('button').on('click tap', function (e) {
        event.preventDefault();
        let valorCompra = $(this).data("value1");
        let valorSelect = $("select[name=opciones"+valorCompra+"]").val();
        let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                url: "/cambiarEstado",
                type: "POST",
                data: {
                    idCompra: valorCompra,
                    estado: valorSelect,
                    _token: _token
                },
                success: function(response) {
                    if (response) {
                        $('.success').text(response.success);
                        location.reload();
                    }
                },
            });
        });   
});
</script>
@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRODUCTOS M&S INGENIERIAS</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/logouwu.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

</head>

</html>