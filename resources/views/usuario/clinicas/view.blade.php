@extends('usuario.layout')

@section('content')
<main id="main">
        
            <!--==========================
              About Section
            ============================-->
            <section id="about" class="wow fadeInUp">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 about-img">
                    @if (is_null($clinica->imagen))
                      <img src="/img/noimagen.png" alt="">   
                    @else
                      <img src="{{url($clinica->imagen)}}" alt="">
                    @endif
                  </div>
        
                  <div class="col-lg-6 content">
                    <h2>{{$clinica->nombre}}</h2>
                    <h3>{{$clinica->estado->nombre}}</h3>
                    <h3>RIF:{{$clinica->rif}}</h3>
                    <h3><i class="fa fa-envelope-o"></i>Correo:{{$clinica->email}}</h3>
                    <h3>Dirección:{{$clinica->direccion}}</h3> 
                  </div>
                  <div class="col-lg-12 content">  
                    <p>{!!$clinica->descripcion!!}</p>
                  </div>
                </div>
                
            </section><!-- #about -->
</main>
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">Listado de intervenciones quirúgicas ofrecidas en esta clínica</h3>
            
        </div>

      </div>
    </section><!-- #call-to-action -->


<!--==========================
Our Team Section
============================-->
<section id="team" class="wow fadeInUp">
 
  <div class="container">
    <div class="row">
      @foreach($clinica->tratamientos as $tratamiento)
        
        <div id="{{$tratamiento->especialidad->descripcion}}" class="col-lg-3 col-md-6">
          <a href="{{route('usuario.tratamiento.view',$tratamiento)}}">
          <div class="member">
            <div class="pic"><img src="/img/cirugia.jpg" alt=""></div>
            <div class="details">
              <h4>{{$tratamiento->nombre}}</h4>
              <span>{{$tratamiento->especialidad->descripcion}}</span>
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
              <h3 class="cta-title">Cirujanos asociados a esta clínica</h3>
              
          </div>
  
        </div>
    </section><!-- #call-to-action -->
  
  
  <!--==========================
  Our Team Section
  ============================-->
  <section id="team" class="wow fadeInUp">
   
    <div class="container">
      <div class="row">
        @foreach($clinica->cirujanos as $cirujano)
          
          <div id="{{$cirujano->especialidad->descripcion}}" class="col-lg-3 col-md-6">
            <a href="{{route('usuario.cirujano.view',$cirujano)}}">
            <div class="member">
              <div class="pic">
                @if (is_null($cirujano->imagen))
                  <img src="/img/noimagen.png" alt="">   
                @else
                  <img src="{{url($cirujano->imagen)}}" alt="">
                @endif  
              </div>
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