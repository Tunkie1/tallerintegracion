<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRODUCTOS M&S INGENIERIAS</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/logouwu.png') }}"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>

    <!-- Ajax -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>

<body>

<!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
    <img class="strips" src="assets/images/strips.png" style="width:100%; height:100%;">
    </div>
    <div id="imprimir" class="container">
        <div class="header-container header">
            <a class="navbar-brand logo"> <img class="logo" src="assets/images/logouwu.png"/> </a>
            <a href="#email-form">
               
            </a>
            <div class="header-right">
                
                 <button class="header-btn"style="margin: 10px" ><a class="navbar-item" href="/">Menu Principal</a></button>
                   <button class="header-btn"style="margin: 10px"><a class="navbar-item" href="#features">Dudas</a></button>
                   @guest
                <button class="header-btn"style="margin: 10px"><a class="navbar-item" href="login">Ingresar</a></button>
                @else
                <button class="header-btn dropdown-item" style="margin: 10px" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                </button>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
                
            
            </div>
        </div>
        <!--navigation-->


        <!-- Hero-Section
          ================================================== -->

        <div class="hero row">
            <div class="hero-right col-sm-6 col-sm-6">
                <h1 class="header-headline bold">M&S INGENIERIAS <br></h1>
                <h4 class="header-running-text light"> Distribuidora de<br>productos de limpieza<br>
Para reservar productos contactenos mediante Whatsapp, correo electronico o Facebook<br><br></h4>
               
            </div><!--hero-left-->

            



        </div><!--hero-->

    </div> <!--hero-container-->

</div><!--hero-background-->



<div class="container">
   <div style="margin-top: 50px; margin-bottom: 50px">
        @yield('content')
   </div>
</div>






<div class="blue-section">
    <h3 class="blue-section-header bold"> Precios especiales a mayoristas y empresas.
Para información sobre mas productos al WhatsApp. Copyright © Todos los derechos reservados ®</h3>
    

    
    <!--email-form-div-->

    <div id="newsletter-loading-div"></div>
    <!--email-form-->
</div>
<!--blue-section-->

<!-- Footer
  ================================================== -->


<!-- Footer
  ================================================== -->



<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>

</body>

</html>