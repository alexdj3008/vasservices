@extends('usuario.layout') @section('content')
<main id="main">
  <!--==========================
    About Section
   ============================-->
  <section id="about" class="wow fadeInUp">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 about-img">
            @if (is_null($cirujano->imagen))
              <img src="http://localhost/vas/public/img/noimagen.png" alt="">   
            @else
              <img src="{{url($cirujano->imagen)}}" alt="">
           @endif
        </div>
        <div class="col-lg-6 content">
          <h2>{{$cirujano->user->name}}</h2>
          <h3>{{$cirujano->especialidad->descripcion}}</h3>
          <p>{!!$cirujano->descripcion!!}</p>
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
        <h3 class="cta-title">Clínicas donde opera el cirujano</h3>

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
      @foreach($cirujano->clinicas as $clinica)

      <div id="{{$clinica->nombre}}" class="col-lg-3 col-md-6">
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
              <span>{{$clinica->estado->nombre}}</span>
            </div>
          </div>
        </a>
      </div>

      @endforeach
    </div>
  </div>

</section>

@stop