<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{config('app.name')}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="http://localhost/vas/public/img/favicon.png" rel="icon">
  <link href="http://localhost/vas/public/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="http://localhost/vas/public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="http://localhost/vas/public/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://localhost/vas/public/lib/animate/animate.min.css" rel="stylesheet">
  <link href="http://localhost/vas/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="http://localhost/vas/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://localhost/vas/public/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="http://localhost/vas/public/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  @stack('styles')
  <!-- Main Stylesheet File -->
  <link href="http://localhost/vas/public/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">
  <!--==========================
    Top Bar
  ============================-->
  @if(Auth::guest())
  
  @else
    <section id="topbar" class="d-none d-lg-block">
      <div class="container clearfix">
        
        <div class="social-links float-right">
          <a href="{{route('paciente.datos.edit',auth()->user())}}" class="twitter"><i class="fa fa-user"></i> Editar informacion</a>
            Hola! {{auth()->user()->name}}

          
        </div>
      </div>
    </section>
  @endif
    
    <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="{{route('home')}}" class="scrollto">{{config('app.name')}}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="{{route('home')}}">Inicio</a></li>
          <li><a href="{{route('home')}}#about">Conócenos</a></li>
          <li><a href="{{route('tratamientos')}}">Especialidades</a></li>
          <li class="menu-has-children"><a href="">Nuestros afiliados</a>
            <ul>
              <li><a href="{{route('clinicas')}}">Clínicas</a></li>
              <li><a href="{{route('cirujanos')}}">Médicos</a></li>
            </ul>
          </li>
          <li><a href="{{route('servicios')}}">Servicios adicionales</a></li>
          @if(Auth::guest())
          
          @else
            <li><a href="{{route('logout')}}">Cerrar Sesión</a></li>
          @endif
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--Contenido-->
  @yield('content')
  <!--Fin del contenido-->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright 2018 <strong>VAS</strong>. Todos los derechos reservados
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="http://localhost/vas/public/lib/jquery/jquery.min.js"></script>
  <script src="http://localhost/vas/public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="http://localhost/vas/public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/vas/public/lib/easing/easing.min.js"></script>
  <script src="http://localhost/vas/public/lib/superfish/hoverIntent.js"></script>
  <script src="http://localhost/vas/public/lib/superfish/superfish.min.js"></script>
  <script src="http://localhost/vas/public/lib/wow/wow.min.js"></script>
  <script src="http://localhost/vas/public/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="http://localhost/vas/public/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="http://localhost/vas/public/lib/sticky/sticky.js"></script>
  @stack('scripts')
  

  <!-- Template Main Javascript File -->
  <script src="http://localhost/vas/public/js/main.js"></script>

</body>
</html>