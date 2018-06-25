@extends('usuario.layout') @section('content')
<main id="main">

  <!--==========================
              About Section
            ============================-->
  <section id="about" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 about-img">
          <img src="/img/cirugia.jpg" alt="">
        </div>

        <div class="col-lg-6 content">
          <h2>{{$tratamiento->nombre}}</h2>
          <h3>{{$tratamiento->especialidad->descripcion}}</h3>
          <p>{!!$tratamiento->descripcion!!}</p>
        </div>
      </div>
    </div>
  </section>
  <!-- #about -->
</main>

<!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Clínicas donde se realiza este tipo de cirugía</h3>
          </div>
        </div>
      </div>
    </section>
    <!-- #call-to-action -->
    
    
    <!--==========================
      Our Team Section
      ============================-->
    <section id="team" class="wow fadeInUp">
    
      <div class="container">
        <div class="row">
          @foreach($tratamiento->clinicas as $clinica)
    
          <div id="{{$clinica->nombre}}" class="col-lg-3 col-md-6">
            <a href="{{route('usuario.clinica.view',$clinica)}}">
              <div class="member">
                <div class="pic">
                  @if (is_null($clinica->imagen))
                    <img src="/img/noimagen.png" alt="">   
                  @else
                    <img src="{{url($clinica->imagen)}}" alt="">
                  @endif
                </div>
                <div class="details">
                  <h4>{{$clinica->nombre}}</h4>
                  <span>{{$clinica->estado->nombre}}</span>
                </div>
              </div>
            </a>
          </div>
    
          @endforeach
        </div>
      </div>
    
    </section>
    
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Cirujanos que cuentan con la especialidad necesaria para este tipo de cirugía</h3>
            
        </div>

      </div>
  </section><!-- #call-to-action -->


<!--==========================
Our Team Section
============================-->
<section id="team" class="wow fadeInUp">
 
  <div class="container">
    <div class="row">
      @foreach($tratamiento->especialidad->cirujanos as $cirujano)
        
        <div id="{{$cirujano->especialidad->descripcion}}" class="col-lg-3 col-md-6">
          <a href="{{route('usuario.cirujano.view',$cirujano)}}">
          <div class="member">
            <div class="pic">
              @if (is_null($cirujano->imagen))
                <img src="/img/noimagen.png" alt="">   
              @else
                <img src="{{url($cirujano->imagen)}}" alt="">
              @endif
            <div class="details">
              <h4>{{$cirujano->user->name}}</h4>
              <span>{{$cirujano->especialidad->descripcion}}</span>
            </div>
          </div>
          </a>
        </div>
        
      @endforeach
    </div>
  </div>
 
</section>

@stop