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
                    <img src="http://localhost/vas/public/img/cirugia.jpg" alt="">
                  </div>
        
                  <div class="col-lg-6 content">
                    <h2>{{$cirujano->nombre}}</h2>
                    <h3>{{$cirujano->especialidad->descripcion}}</h3>
                    <p>{!!$cirujano->descripcion!!}</p>
                  
                    
                  </div>
                </div>
                
            </section><!-- #about -->
        
            
            
        
        
          </main>
        
@stop