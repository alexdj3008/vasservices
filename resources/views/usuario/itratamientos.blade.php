@extends('usuario/layout')

@section('content')
    <!--==========================
      Services Section
    ============================-->
    <section id="services">
            <div class="container">
              <div class="section-header">
                <h2>Tratamientos quirúrgicos</h2>
                <p>A continuación te mostramos las especialidades de tratamientos quirúrgicos ofrecidos en nuestra gestión</p>
                <p>Haz click en alguna de ellas para ver las cirugias disponibles en cada especialidad</p>
              </div>

        <div class="row">
          @foreach($especialidades as $especialidad)
            <a href="#{{$especialidad->descripcion}}">  
              <div class="col-lg-6">
                <div class="box wow fadeInLeft">
                  <div class="icon"><i class="fa fa-bar-chart"></i></div>
                  <h4 class="title"><a href="#{{$especialidad->descripcion}}">{{$especialidad->descripcion}}</a></h4>
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
                  <h3 class="cta-title">Listado de intervenciones quirúgicas ofrecidas por nuestra organización</h3>
                  
              </div>
      
            </div>
          </section><!-- #call-to-action -->
      
      
<!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
      <div class="container">
        @foreach($especialidades as $especialidad)
          <div id="{{$especialidad->descripcion}}" class="section-header">
            <h2>{{$especialidad->descripcion}}</h2>
          </div>
            
          <div class="row">
            @foreach($tratamientos as $tratamiento)
              @if($tratamiento->especialidad_id==$especialidad->id)
              <div id="{{$tratamiento->especialidad->descripcion}}" class="col-lg-3 col-md-6">
                <a href="{{route('usuario.tratamiento.view',$tratamiento)}}">
                <div class="member">
                  <div class="pic"><img src="img/cirugia.jpg" alt=""></div>
                  <div class="details">
                    <h4>{{$tratamiento->nombre}}</h4>
                    <span>{{$tratamiento->especialidad->descripcion}}</span>
                  </div>
                </div>
                </a>
              </div>
              @endif
            @endforeach
          </div>
        @endforeach  
    </section>

@stop