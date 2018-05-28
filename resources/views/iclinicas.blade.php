@extends('usuario/layout')

@section('content')
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
            <div class="container">
              <div class="section-header">
                <h2>Estados del país</h2>
                <p>Haz click en alguno de los estados para ver las clínicas disponibles en una determinada región del pais</p>
              </div>
      
              <div class="row">
                @foreach($estados as $estado)
                <a href="#{{$estado->nombre}}">
                  <div class="col-lg-4">
                      <div class="box wow fadeInLeft">
                        <div class="icon"><i class="fa fa-bar-chart"></i></div>
                        <h4 class="title"><a href="">{{$estado->nombre}}</a></h4>
                        <p class="description"></p>
                      </div>
                  </div>
                </a>    
                @endforeach    
              </div>
      
            </div>
          </section><!-- #services -->

          
    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeInUp">
            <div class="container">
              <div class="row">
                <div class="col-lg-9 text-center text-lg-left">
                  <h3 class="cta-title">Listado de clínicas afiliadas a nuestra organización</h3>
                  
              </div>
      
            </div>
          </section><!-- #call-to-action -->
      
      
<!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
          @foreach($estados as $estado)
            <div class="container">
              <div id="{{$estado->nombre}}" class="section-header">
                <h2> {{$estado->nombre}}</h2>
              </div>
              <div class="row">
                @foreach($clinicas as $clinica)
                  @if($estado->id==$clinica->estado_id)
                  <div class="col-lg-3 col-md-6">
                    <div class="member">
                      <div class="pic"><img src="img/team-1.jpg" alt=""></div>
                      <div class="details">
                        <h4>{{$clinica->nombre}}</h4>
                        <span>{{$clinica->direccion}}</span>
                      </div>
                    </div>
                  </div>
                @endif  
                @endforeach
            </div>
          @endforeach
@stop 