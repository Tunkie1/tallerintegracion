@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Productos</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Imagen</th>
                @guest
                @else
                    <th width="250px">Accion</th>
                @endguest
            </tr>
            @foreach ($blogs as $blog)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $blog->title }}</td>
                <td>{{ $blog->description }}</td>
                <td>{{ $blog->precio }}</td>
                <td><img width="140px" height="140px" src="{{ $blog->url }}"></td>
                @guest
                @else
                    <td><a type="button" class="btn btn-success" name="price" href="{{ route('blogs.show',$blog->id) }}">Selecionar</a></td>
                @endguest
            </tr>
            @endforeach
        </table>
    </div>
  
    {!! $blogs->links() !!}
      
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