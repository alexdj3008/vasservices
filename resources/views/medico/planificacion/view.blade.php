@extends('medico/layout') @section('header')
<h1>
    Planificación
    <small>Consultar Planificación</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li>
        <a href="{{route('medico.planificacion.index')}}">
            <i class="fa fa-dashboard"></i> Planificación</a>
    </li>
    <li class="active">Consultar Planificación</li>
</ol>
@stop @section('content')
<div class="row">
    
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Datos del paciente</h3>
                </div>
                <div class="box-body box-profile">
                    @if (is_null($planificacion->paciente->imagen))
                        <img class="profile-user-img img-responsive img-circle" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
                    @else
                        <img class="profile-user-img img-responsive img-circle" src="{{url($planificacion->paciente->imagen)}}" alt=""> 
                    @endif

                    <h3 class="profile-username text-center">{{$planificacion->paciente->user->name}}</h3>
                    
                    <ul class="list-group list-group-unbordered">
                        
                        
                    </ul>
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
                    <p class="text-muted">
                        {{$planificacion->paciente->direccion}}
                    </p>
                    <strong><i class="fa fa-phone"></i> Teléfono</strong>
                    <p class="text-muted">
                        {{$planificacion->paciente->telefono}}
                    </p>
                    <strong><i class="fa  fa-envelope-o"></i> correo</strong>
                    <p class="text-muted">
                        {{$planificacion->paciente->user->email}}
                    </p>
                
                    

                </div>
                
                

            </div>

        </div>
        <div class="col-md-8">  
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Descripción</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                      <div class="col-md-4">
                        <p><strong>Fecha:</strong>{{$planificacion->reservacion->fecha->format('d M Y')}}</p>  
                        <p><strong>Clínica:</strong>{{$planificacion->reservacion->quirofano->clinica->nombre}}</p>
                        <p><strong>Quirófano:</strong>{{$planificacion->reservacion->quirofano->numero}}</p>
                        
                      </div>
                      <div class="col-md-4">
                        <strong>Personal Quirúrgico</strong>
                        @foreach($planificacion->personals as $personal)
                            <p><strong>Nombre:</strong>{{$personal->nombre}}</p>
                            <p><strong>Cargo:</strong>{{$personal->cargo}}</p>
                        @endforeach
                      </div>
                      <div class="col-md-4">
                        <strong>Insumos</strong>
                        @foreach($planificacion->insumos as $insumo)
                            <p><strong>Descripcion:</strong>{{$insumo->descripcion}}</p>
                        @endforeach
                      </div>
                      <div class="col-md-12">
                            <strong><i class="fa fa-pencil margin-r-5"></i> Servicios contratados</strong>
                                <p>
                                    @foreach($planificacion->servicios as $servicios)
                                        <span class="label label-success">{{$servicios->nombre}}</span>
                                    @endforeach
                                </p>
                      </div>   
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
    
</div>

@stop @push('styles')

@endpush 
@push('scripts')
@endpush