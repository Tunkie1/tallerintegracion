@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Formularios de contactos</h1>
    @foreach($contactos as $contacto)

        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Asunto: {{$contacto->asunto}}</h3>
                <h5>Autor: {{$contacto->name}}</h5>
                <h5>Email: {{$contacto->email}}</h5>
                <br>
                <h3>Mensaje:</h3>
                <div class="p-3">
                    <p>{{$contacto->mensaje}}</p>
                </div>
            </div>
        </div>
        <br>
    @endforeach

    <div class="p-2">
        <a href="{{route('welcome')}}" class="btn btn-primary">Volver</a>
    </div>
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