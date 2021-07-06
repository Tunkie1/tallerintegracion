@extends('layouts.app')

@section('content')

<div class="container">
	<!--Section: Contact v.2-->
	<section class="mb-4">

	    <!--Section heading-->
	    <h2 class="h1-responsive font-weight-bold text-center my-4">Contactanos</h2>
	    <!--Section description-->
	    <p class="text-center w-responsive mx-auto mb-5">Si deseas contactarnos para resolver dudas, escribenos.</p>

	    <div class="row">

	        <!--Grid column-->
	        <div class="col-md-9 mb-md-0 mb-5">
	            <form id="contact-form" name="contact-form"  action="{{ route('contacto') }}" method="POST">
				@csrf
	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
							<label for="name" class="">Nombre</label>
	                        	@guest
									<input type="text" id="name" name="name" class="form-control">
								@else
								<input type="text" id="name" name="name"  value="{{ Auth::user()->name }}" class="form-control">
								@endguest
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
								<label for="email" class="">Email</label>
								@guest
									<input type="text" id="email" name="email"  class="form-control">
								@else
									<input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
								@endguest
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
								<label for="subject" class="">Asunto</label>
	                            <input type="text" id="subject" name="asunto" class="form-control">
	                        </div>
	                    </div>
	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
							<label for="message">Mensaje</label>
	                            <textarea type="text" id="message" name="mensaje" rows="2" class="form-control md-textarea"></textarea>
	                        </div>

	                    </div>
	                </div>
					</br>
	                <!--Grid row-->
					<div class="text-center text-md-left">
	                	<button class="btn btn-primary" type="submit">Enviar</button>
	            	</div>
	            </form>
	            <div class="status"></div>
	        </div>
	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-md-3 text-center">
	            <ul class="list-unstyled mb-0">
	                <li><i class="fas fa-map-marker-alt fa-2x"></i>
	                    <p>M&S Ingenierias</p>
	                </li>

	                <li><i class="fas fa-phone mt-4 fa-2x"></i>
	                    <p>+56968953347</p>
	                </li>

	                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
	                    <p>msingenierias@gmail.com</p>
	                </li>
	            </ul>
	        </div>
	        <!--Grid column-->

	    </div>

	</section>
	<!--Section: Contact v.2-->
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