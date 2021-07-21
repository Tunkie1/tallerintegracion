@extends('layouts.app1')
@section('content')

    <input hidden name="idUsuario" value={{Auth::user()->id}}>
    <input hidden name="idProducto" value={{ $blog->id }}>

    <div class="container">
        <h3>Carrito de compra</h3>
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Mostrar productos </h2>
            </div>
        </div>
    </div>

    <img src="{{ $blog->url }}">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $blog->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $blog->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Precio:</strong>
                {{ $blog->precio }}
            </div>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary" href="{{ route('/productosCliente') }}"> Atras</a>
    </div>
    <br>
    <button type="button" class="btn btn-success save-data" data-toggle="modal" data-target="#exampleModal">
      Pagar Aqui
    </button>

    </div>

    <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PAGO</h5>
      </div>
      <div class="modal-body">
        HAS COMPRADO EL PRODUCTO
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-danger" href="/">SALIR</a>
      </div>
    </div>
  </div>
</div>

<script>

  $(".save-data").click(function(event){
      event.preventDefault();

        let idUsuario = $("input[name=idUsuario]").val();
        let idProducto = $("input[name=idProducto]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');

      
      $.ajax({
        url: "/comprarProducto",
        type:"POST",
        data:{
          idUsuario:idUsuario,
          idProducto:idProducto,
          _token: _token
        },
        success:function(response){
          if(response) {
            $('.success').text(response.success);
            $("#ajaxform")[0].reset();
          }
        },
       });
  });
</script>

@endsection
