<html>

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M&S INGENIERIAS</title>
    <meta name="Nova theme" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/logouwu.png"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>

</head>

<body background="assets/images/blanco.png" style="width:100%; height:100% ; position: absolute; padding-left: 0%;">

<!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
        <img class="strips" src="assets/images/strips.png" style="width:100%; height:100%;">
    </div>
    <div class="container">
        <div class="header-container header">
            <a class="navbar-brand logo"> <img class="logo" src="assets/images/logouwu.png"/> </a>
            <a href="#email-form">
               
            </a>
            <div class="header-right">
                
                <button class="header-btn"style="margin: 10px"><a class="navbar-item" href="#features">Contactar</a></button>
                <button class="header-btn"style="margin: 10px">
                    @guest
                    <a class="navbar-item" href="{{ route('dudas') }}">Dudas</a>
                    @else
                        @if(Auth::user()->rol == "ADMIN")
                            <a class="navbar-item" href="{{ route('getContactos') }}">Dudas</a>
                        @elseif (Auth::user()->rol == "USER")
                            <a class="navbar-item" href="{{ route('dudas') }}">Dudas</a>
                        @endif
                    @endguest
                
                </button>
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
        @guest
        <div class="hero row">
            <div class="hero-right col-sm-6 col-sm-6">
                @guest
                <h1 class="header-headline bold">M&S INGENIERIAS<br></h1>
                @else
                <h1 class="header-headline bold">ROL USUARIO<br></h1>
                <h1 class="header-headline bold">M&S INGENIERIAS<br></h1>
                @endguest
                <h4 class="header-running-text light"> Distribuidora de<br>productos de limpieza<br>y sanitizacion.Precios especiales a mayoristas y empresas. Para información sobre mas productos al WhatsApp.<br><br></h4>
               
            </div><!--hero-left-->
        @else
            @if (Auth::user()->rol == "USER" || Auth::user()->rol == "ADMIN")
            <div class="hero row">
                <div class="hero-right col-sm-6 col-sm-6">
                    @guest
                    <h1 class="header-headline bold">M&S INGENIERIAS<br></h1>
                    @else
                    <h1 class="header-headline bold">M&S INGENIERIAS - Bienvenido {{Auth::user()->name}}</h1>
                    <h3>Si desea cambiar modificar sus datos, haz click <a href="{{ route('editUser', auth::user()->id) }}" style="color: black">aquí</a><br></h3>
                    <h3>Si compraste productos y quieres ver el estado de ellos, haz click <a href="{{ route('productosComprados') }}" style="color: black">aquí</a><br></h3>
                    @endguest
                    <h4 class="header-running-text light"> Distribuidora de<br>productos de limpieza<br>y sanitizacion.Precios especiales a mayoristas y empresas. Para información sobre mas productos al WhatsApp.<br><br></h4>
                    @if ($message = Session::get('success'))
                      <div class="alert alert-success">
                        <p>{{ $message }}</p>
                      </div>
                    @endif
                </div><!--hero-left-->
            @endif    
        @endguest        

        </div><!--hero-->

    </div> <!--hero-container-->

</div><!--hero-background-->


<!-- Features
  ================================================== -->
<center>
<div id="features" class="features-section">

    <div class="features-container row">

        <h2 class="features-headline light">Menu</h2>

        <div class="col-sm-4 feature">

            <div class="feature-icon feature-no-display">
                <a class="navbar-item" href="#pricing"><img class="feature-img" src="assets/images/responsive.svg"></a>
            </div>
            <h5 class="feature-head-text feature-no-display"> Contacto </h5>
            <p class="feature-subtext light feature-no-display">Aqui encontraras nuestros principales contactos como Whatsapp y Gmail para poder reservar una hora con nosotros o hacer tus consultas</p>
        </div>

        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-mid">
               <a class="navbar-item" href="#team"> <img class="feature-img" src="assets/images/ubicacion.png"></a>
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-mid"> Ubicacion </h5>
            <p class="feature-subtext light feature-no-display feature-display-mid"> Aqui nos podras encontrarnos de forma fisica</p>
        </div>

        @guest
        <div class="col-sm-4 feature">
            <div class="feature-icon feature-no-display feature-display-last">
                <a href="productosCliente"><img class="bullet-img" src="assets/images/iconoproduct.png" style="width:50px; height:30px;"></a>
            </div>
            <h5 class="feature-head-text feature-no-display feature-display-last"> Productos </h5>
            <p class="feature-subtext light feature-no-display feature-display-last"> Aqui podra ver nuestros principales productos</p>
        </div>
        @else
            @if (Auth::user()->rol == "ADMIN")
            <div class="col-sm-4 feature">
                <div class="feature-icon feature-no-display feature-display-last">
                    <a href="blogs"><img class="bullet-img" src="assets/images/iconoproduct.png" style="width:50px; height:30px;"></a>
                </div>
                <h5 class="feature-head-text feature-no-display feature-display-last"> Productos </h5>
                <p class="feature-subtext light feature-no-display feature-display-last"> Aqui podra ver nuestros principales productos</p>
            </div>
            @endif
            @if (Auth::user()->rol == "USER")
            <div class="col-sm-4 feature">
                <div class="feature-icon feature-no-display feature-display-last">
                    <a href="productosCliente"><img class="bullet-img" src="assets/images/iconoproduct.png" style="width:50px; height:30px;"></a>
                </div>
                <h5 class="feature-head-text feature-no-display feature-display-last"> Productos </h5>
                <p class="feature-subtext light feature-no-display feature-display-last"> Aqui podra ver nuestros principales productos</p>
            </div>
            @endif
        @endguest

    </div> <!--features-container-->
</div> <!--features-section-->

<!-- Logos
  ================================================== -->
<div class="white-section row">

    <div class="imac col-sm-6">
        <center><img class="imac-screen img-responsive" src="assets/images/iconoquienes.png" style="width:340px; height:500px;" ></center>
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light">Quienes somos</h2>

            <div class="imac-section-desc">

            <span>  M&S ingenierías especialistas en distribución de productos de limpieza y sanitización, nuestros productos 100% certificados contra bacterias y virus. Estamos comprometidos con el cuidado de la salud humana.</span>
            </div>
        </div>
    </div>
</div>

<div id="pricing" class="pricing-background">

    <h2 class="pricing-section-header light text-center">Contactos</h2>
   

    <div class="pricing-table row">
        <div class="col-sm-4" >
            <div class="plan">
                <h3 class="plan-title light">Contacto Whatsapp</h3>
                
                <img src="assets/images/wsp.png" style="width:100px; height:100px;">
                
                <div class="plan-price-div text-center">
                    <div class="choose-plan-div">
                        <a class="plan-btn light" href="https://wa.link/v5c9t2">
                            Whatsapp
                        </a>
                    </div>
                </div>
            </div><!--basic-plan--->
        </div><!--col-->

        

        <div class="col-sm-4">
            <div class="plan">
                <h3 class="plan-title light">Contacto Gmail</h3>
                <img src="assets/images/gmail.png" style="height:100px;">
               <p>msingenieria.ccp
                <br>@gmail.com</p>
                    
                    
                
                <div class="plan-price-div text-center">

                    <div class="choose-plan-div" >
                        <a class="plan-btn light" href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWsCbHNWLHbBMmwRtMLBmDClFTmPtrLLQJTcrNHllRrdQhnvGGJTCHBJNGhkZtLswkJNRLMFg">
                            Gmail
                        </a>
                    </div>
                </div>    

            </div><!--pro-plan--->
        </div><!--col-->
<div class="col-sm-4">
            <div class="plan">
                <h3 class="plan-title light">Contacto Facebook</h3>
                <img src="assets/images/face.png" style="width:100px; height:100px;">
                <div class="plan-price-div text-center">
                    <div class="choose-plan-div">
                        <a class="plan-btn light" href="https://www.facebook.com/MS-ingenieria-112189473797229/">
                           Facebook
                        </a>
                    </div>
                </div>
            </div><!--pro-plan--->
        </div>
    </div> 

     <!--pricing-table-->

</div><!--pricing-background-->

<div id="team" class="team">
    <h2 class="team-section-header light text-center">Ubicacion</h2>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.9878409814396!2d-73.05678818470956!3d-36.8188112799447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9669b5c666170cd3%3A0xb8d659ee0dd9853a!2zQW5pYmFsIFBpbnRvIDEyMzYsIENvbmNlcGNpw7NuLCBCw61vIELDrW8!5e0!3m2!1ses!2scl!4v1595369630538!5m2!1ses!2scl" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" ></iframe></center>
    <div class="team-container row" style="padding-left: 370px;">


        

        <div class="col-sm-4 team-member">
            
                
            <div class="team-member-text">
                
            </div>

        </div>
        <! -- .row -->

    </div> <!--team-container--->

</div>



<!--pricing-background-->

<!-- Team
  ================================================== -->

 <!--team-section--->

<!-- Email-Section
  ================================================== -->

<div class="blue-section">
    <h3 class="blue-section-header bold"> Copyright © Todos los derechos reservados ®</h3>
    

    
    <!--email-form-div-->

    <div id="newsletter-loading-div"></div>
    <!--email-form-->
</div>
<!--blue-section-->

<!-- Footer
  ================================================== -->

</center>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="assets/js/script.js"></script>

</body>

</html>