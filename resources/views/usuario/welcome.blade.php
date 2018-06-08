@extends('usuario/layout')

@section('content')
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Venezuelan Association<br>of surgeons</h2>
      <div>
        @if(Auth::guest())
        <a href="{{route('login')}}" class="btn-get-started scrollto">Iniciar sesión</a>
        <a href="{{route('register')}}" class="btn-projects scrollto">Registrarse</a>
        @else
        <a href="{{route('login')}}" class="btn-get-started scrollto">Solicitar cita</a>
       @endif
      </div>
      
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
            <img src="img/about.jpg" alt="">
          </div>

          <div class="col-lg-6 content">
            <h2>¿Quienes somos?</h2>
            {{-- <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3> --}}
            <p>Somos una compañía de servicios médicos privados altamente especializada en ofrecer servicios quirúrgicos completos, con precio cerrado, sin esperas, sin sorpresas y a coste reducido. Esta reducción de costes es posible gracias al gran volumen de intervenciones que tramitamos diariamente, permitiéndonos ofrecer servicios quirúrgicos de la máxima calidad a un precio ajustado en numerosas especialidades.</p>
            
          </div>
        </div>
        <div class="row">
            
  
            <div class="col-lg-6 content">
              
              <h2>¿Por qué confiar en VAS?</h2>
              
              <ul>
                <li><i class="ion-android-checkmark-circle"></i> Total Transparencia.</li>
                <li><i class="ion-android-checkmark-circle"></i> Equipo médico de calidad.</li>
                <li><i class="ion-android-checkmark-circle"></i> Las mejores clínicas.</li>
                <li><i class="ion-android-checkmark-circle"></i> Servicio de medicina riguroso y de calidad.</li>
              </ul>
  
            </div>
            <div class="col-lg-6 content">
              
              <h2>¿Qué incluye nuestro paquete básico?</h2>
              <p>Incluye todos los costes que se generan durante el proceso quirúrgico completo (desde el diagnóstico que realiza el médico especialista hasta la última revisión postoperatoria necesaria para obtener el alta médica).</p>
  
            </div>
            
          </div>
      </div>
    </section><!-- #about -->

    
    


  </main>

  @stop