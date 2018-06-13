@extends('usuario/layout')

@section('content')
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Estados</h2>
          <p>A continuación te mostramos los estados de Venezuela donde existen clínicas asociadas a nuestra organización</p>
          <p>Haz click en alguno de ellos para ver las clínicas existentes en cada estado</p>
        </div>

      <div class="row">
      @foreach($estados as $estado)
      <a href="#{{$estado->nombre}}">  
        <div class="col-lg-4">
          <div class="box wow fadeInLeft">
            <div class="icon"><i class="fa fa-bar-chart"></i></div>
            <h4 class="title"><a href="#{{$estado->nombre}}">{{$estado->nombre}}</a></h4>
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
          
            <div class="container">
              @foreach ($estados as $estado)
                  
              <div id="{{$estado->nombre}}" class="section-header">
                  <h2> {{$estado->nombre}}</h2>
                </div>
                <div class="row">
                  @foreach($clinicas as $clinica)
                  @if ($clinica->estado_id==$estado->id)
                  
                  <div class="col-lg-3 col-md-6">
                    <a href="{{route('usuario.clinica.view',$clinica)}}">
                        <div class="member">
                          <div class="pic">
                            @if (is_null($clinica->imagen))
                              <img src="http://localhost/vas/public/img/noimagen.png" alt="">   
                            @else
                              <img src="{{url($clinica->imagen)}}" alt="">
                            @endif
                          </div>
                          <div class="details">
                            <h4>{{$clinica->nombre}}</h4>
                            <span>{{$clinica->direccion}}</span>
                            <span>{{$clinica->estado->nombre}}</span>
                          </div>
                        </div>
                      </a>
                    </div>
                    @endif
                    @endforeach
                    
              </div>  
                @endforeach
            </div>
          
@stop 