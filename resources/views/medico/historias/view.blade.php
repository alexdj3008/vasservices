@extends('medico/layout') @section('header')
<h1>
    Historias Médicas
    <small>Actualizar historia médica</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li>
        <a href="{{route('medico.historias.index')}}">
            <i class="fa fa-dashboard"></i> Historias Médicas</a>
    </li>
    <li class="active">Actualizar historia médica</li>
</ol>
@stop @section('content')
<div class="row">
    
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Datos del paciente</h3>
                </div>
                <div class="box-body box-profile">
                    @if (is_null($historia->paciente->imagen))
                        <img class="profile-user-img img-responsive img-circle" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
                    @else
                        <img class="profile-user-img img-responsive img-circle" src="{{url($historia->paciente->imagen)}}" alt=""> 
                    @endif

                    <h3 class="profile-username text-center">{{$historia->paciente->user->name}}</h3>
                    
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                        <b>N° de Historia</b> <a class="pull-right">{{$historia->id}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Última modificación</b> <a class="pull-right">{{$historia->updated_at->format('d M Y')}}</a>
                        </li>
                        
                    </ul>
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
                    <p class="text-muted">
                        {{$historia->paciente->direccion}}
                    </p>
                    <strong><i class="fa fa-phone"></i> Teléfono</strong>
                    <p class="text-muted">
                        {{$historia->paciente->telefono}}
                    </p>
                    <strong><i class="fa  fa-envelope-o"></i> correo</strong>
                    <p class="text-muted">
                        {{$historia->paciente->user->email}}
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
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Grupo Sanguineo</strong>
                        <p>{{$historia->gruposanguineo}}</p>
                      </div>
                      <div class="col-md-4">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Presión arterial</strong>
                            <p>{{$historia->presionarterial}}</p>
                      </div>
                        <div class="col-md-4">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Respiración</strong>
                            <p>{{$historia->respiracion}}</p>
                        </div>
                        <div class="col-md-4">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Latidos por minuto</strong>
                            <p>{{$historia->latidos}}</p>
                        </div>
                        <div class="col-md-4">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Glicemia</strong>
                            <p>{{$historia->glicemia}}</p>
                        </div>
                        <div class="col-md-4">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Peso(kg)</strong>
                            <p>{{$historia->peso}}</p>
                        </div>
                        <div class="col-md-4">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Estatura(cm)</strong>
                            <p>{{$historia->talla}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Alergias</strong>
                            <p>{{$historia->alergias}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Patologías</strong>
                            <p>{{$historia->patologias}}</p>
                        </div>
                        
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Traumatismos</strong>
                            <p>{{$historia->traumatismos}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Antecedentes</strong>
                            <p>{{$historia->antecedentes}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Tratamientos</strong>
                            <p>{{$historia->tratamientos}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Grupo Sanguineo</strong>
                            <p>{{$historia->gruposanguineo}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Medicamentos</strong>
                            <p>{{$historia->medicamentos}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Diagnóstico</strong>
                            <p>{{$historia->diagnostico}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Indicaciones</strong>
                            <p>{{$historia->indicaciones}}</p>
                        </div>
                        <div class="col-md-12">
                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Observaciones</strong>
                            <p>{{$historia->observaciones}}</p>
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