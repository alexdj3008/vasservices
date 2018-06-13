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
                    @if (is_null($servicio->imagen))
                      <img src="/img/noimagen.png"  alt="">   
                    @else
                      <img src="{{url($servicio->imagen)}}" alt="">
                    @endif
                  </div>
                
        
                  <div class="col-lg-6 content">
                    <h2>{{$servicio->nombre}}</h2>
                    <p>{!!$servicio->descripcion!!}</p>
                  </div>
                </div>
                
            </section><!-- #about -->
        
            
            
        
        
          </main>
        
@stop