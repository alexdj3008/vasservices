@extends('usuario/layout')

@section('content')

      
<!--==========================
      Our Team Section
    ============================-->
    <section id="team" class="wow fadeInUp">
          
        <div class="container">
            <div class="section-header">
              <h2>Servicios Adicionales</h2>
              <p>A continuación te mostramos los servicios adicionales ofrecidos en nuestra organización, para que tu estadía durante el proceso de la cirugía sea de tu agrado</p>
              <p>Haz click en alguna de ellos para ver información detallada</p>
            </div>
            <div class="row">
              
                @foreach($servicios as $servicio)
                <div class="col-lg-3 col-md-6">
                  <a href="{{route('usuario.servicio.view',$servicio)}}">
                  <div class="member">
                    <div class="pic">
                        @if (is_null($servicio->imagen))
                        <img src="/img/noimagen.png" alt=""> 
                      @else
                        <img src="{{url($servicio->imagen)}}" alt=""> @endif
                    </div>
                    <div class="details">
                      <h4>{{$servicio->nombre}}</h4>
                      <span>{{$servicio->direccion}}</span>
                      
                    </div>
                  </div>
                </a>
                </div>
                @endforeach
            </div>
          
@stop 