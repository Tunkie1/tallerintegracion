<html>

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

<body>

<!-- Navigation
    ================================================== -->
<div class="hero-background">
    <div>
        <img class="strips" src="assets/images/strips.png">
    </div>
    <div class="container">
        <div class="header-container header">
            <a class="navbar-brand logo"> <img class="logo" src="assets/images/logouwu.png"/> </a>
            <a href="#email-form">
               
            </a>
            <div class="header-right">
                
                 <button class="header-btn"style="margin: 10px" ><a class="navbar-item" href="index.html">Menu Principal</a></button>
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

            

           
            <a href="#.html"><div><img class="mouse" src="assets/images/carritocompra.png" /></div></a>

        </div><!--hero-->

    </div> <!--hero-container-->

</div><!--hero-background-->



<!-- Logos
  ================================================== -->



<!-- White-Section
  ================================================== -->






<div class="white-section row">

    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="assets/images/primerAmonio.jpeg">
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light">Amonio Cuaternario</h2>

            <div class="imac-section-desc">

            <span>Descripcion: 5 Litros, Dilucion 1:6<br>
  Cantidad: Bidon<br>
   <b>Valor:</b> $14.000<br>
<a href="https://www.mercadopago.cl/checkout/v1/redirect?pref_id=555421599-11af9acc-2cec-45a9-8901-40544fb7b368"><img src="assets/images/boton.png"style="width:150px; height:80px;"><br></a>

</span>
            </div>
        </div>
    </div>
</div>


<img src="assets/images/lineamulticolo2.png" style="width:100%; height:40px;">



<div class="white-section row">

    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="assets/images/amonioBlanco.jpeg">
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light">Amonio Cuaternario</h2>

            <div class="imac-section-desc">

            <span>Descripcion: 5 Litros, Dilucion 1:15<br>
  Cantidad: Bidon<br>
   <b>Valor:</b> $19.000<br>
<a href="https://www.mercadopago.cl/checkout/v1/redirect?pref_id=555421599-650e199b-6ce2-4f6e-b645-20da2070abd3"><img src="assets/images/boton.png"style="width:150px; height:80px;"><br></a>

</span>
            </div>
        </div>
    </div>
</div>


<img src="assets/images/lineamulticolo2.png" style="width:100%; height:40px;">



<div class="white-section row">

    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="assets/images/alcoholuwu.jpeg">
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light">Alcohol gel</h2>

            <div class="imac-section-desc">

            <span>Descripcion: 1 Litro<br>
  Cantidad: Botella<br>
   <b>Valor:</b> $6.500<br>
<a href="https://www.mercadopago.cl/checkout/v1/redirect?pref_id=555421599-ca24fdc6-2b90-4054-b65a-e32dbe0e2ec4"><img src="assets/images/boton.png"style="width:150px; height:80px;"><br></a>

</span>
            </div>
        </div>
    </div>
</div>


<img src="assets/images/lineamulticolo2.png" style="width:100%; height:40px;">











<div class="white-section row">

    <div class="imac col-sm-6">
        <img class="imac-screen img-responsive" src="assets/images/bolsa50.jpeg">
    </div>
    <!--imac-->

    <div class="col-sm-6">

        <div class="white-section-text">

            <h2 class="imac-section-header light">Bolsa de Basura</h2>

            <div class="imac-section-desc">

            <span>Descripcion: 50x70 <br>
  Cantidad: Unidad <br>
   <b>Valor:</b> $800<br>
<a href="https://www.mercadopago.cl/checkout/v1/redirect?pref_id=555421599-3943e54a-478b-4dde-b462-79c55f980f8f"><img src="assets/images/boton.png"style="width:150px; height:80px;"><br></a>

</span>
            </div>
        </div>
    </div>
</div>


<img src="assets/images/lineamulticolo2.png" style="width:100%; height:40px;">














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