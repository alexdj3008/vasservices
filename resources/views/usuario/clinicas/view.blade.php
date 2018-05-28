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
                    <img src="http://localhost/vas/public/img/clinica.jpg" alt="">
                  </div>
        
                  <div class="col-lg-6 content">
                  <h2>{{$clinica->nombre}}</h2>
                  <h3>{{$clinica->direccion}}</h3> 
                  
                    <p>{!!$clinica->descripcion!!}</p>
                    <h3>{{$clinica->estado->nombre}}</h3>
                    <h3>{{$clinica->correo}}</h3>
                    
                  </div>
                </div>
                
            </section><!-- #about -->
        
            
            
        
        
          </main>
        
@stop