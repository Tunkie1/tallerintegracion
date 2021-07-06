
@extends('layouts.app')

@section('content')
<div id="idtabla">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Productos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Agregar producto</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Imagen</th>
            <th width="250px">Accion</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->description }}</td>
            <td>{{ $blog->precio }}</td>
            <td><img width="140px" height="140px" src="{{ $blog->url }}"></td>
            <td>
                <form action="{{ route('blogs.destroy',$blog->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('blogs.show',$blog->id) }}">Mostrar</a>
                    
                    <a class="btn btn-success" href="{{ route('blogs.show',$blog->id) }}">Pagar</a>

                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}" >Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger" style="margin-top:10px">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

     <input type="button" value="Imprimir tabla" class="btn btn-info" onclick="printDiv('idtabla')" />
  
    {!! $blogs->links() !!}
      
 </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRODUCTOS M&S INGENIERIAS</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/logouwu.png"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>
</html>

<script type="text/javascript">
    
    function printDiv(divID) {
        //Get the HTML of div
        var divElements = document.getElementById(divID).innerHTML;
        //Get the HTML of whole page
        var oldPage = document.body.innerHTML;
        //Reset the page's HTML with div's HTML only
        document.body.innerHTML = 
          "<html><head><title></title></head><body>" + 
          divElements + "</body>";
        //Print Page
        window.print();
        //Restore orignal HTML
        document.body.innerHTML = oldPage;

    }

</script>

