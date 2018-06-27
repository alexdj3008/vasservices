<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>{{config('app.name')}}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/favicon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Archivos Bootstrap CSS  -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Librerias CSS -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  @stack('styles')
  <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
  <!-- Hoja de estilos principal -->
  <link href="/css/style.css" rel="stylesheet">

  
</head>

<body id="body">
  <!--==========================
    Barra superior(solo cuando está autenticado un usuario)
  ============================-->
  @if(Auth::guest())
  
  @else
    <section id="topbar" class="d-none d-lg-block">
      <div class="container clearfix">
        
        <div class="social-links float-right">
          @if (auth()->user()->hasRole('paciente'))
            <a href="{{route('paciente.datos.edit',auth()->user())}}" class="twitter"><i class="fa fa-user"></i> Editar informacion</a>
            <a href="{{route('paciente.planificacion.index',auth()->user())}}" class="twitter"><i class="fa fa-book"></i> Consultar Planificación</a>
          @endif  
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
      </nav><!-- Menu de navegación -->
    </div>
  </header><!-- Fin del Header -->

  <!--Contenido principal-->
  <section class="content">
      @if(session()->has('flash'))
        <div class="alert alert-success">
          {{session('flash')}}
        </div>
      @endif
  @yield('content')
  </section>
  <!--Fin del contenido principal-->

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

  <!-- Librerias JavaScript -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="/lib/sticky/sticky.js"></script>
  <script src="/adminlte/plugins/jQuery/jquery.min.js"></script>
  <script src="/adminlte/plugins/jQuery/dropdown.js"></script>
  @stack('scripts')
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
  <script>
      $(function () {
        $('#historias-table').DataTable({
          "paging": false,
          "lengthChange": true,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      }); 
  
    </script>

  <!-- Archivo Javascript Principal -->
  <script src="/js/main.js"></script>

</body>
</html>