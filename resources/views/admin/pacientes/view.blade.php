@extends('admin/layout') @section('header')
<h1>
    Pacientes
    <small>Consultar Paciente</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li>
        <a href="{{route('admin.pacientes.index')}}">
            <i class="fa fa-dashboard"></i> Pacientes</a>
    </li>
    <li class="active">Consultar Paciente</li>
</ol>
@stop @section('content')
<div class="row">
    
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Datos del paciente</h3>
                </div>
                <div class="box-body box-profile">
                    @if (is_null($paciente->imagen))
                        <img class="profile-user-img img-responsive img-circle" src="/img/noimagen.png" alt=""> 
                    @else
                        <img class="profile-user-img img-responsive img-circle" src="{{url($paciente->imagen)}}" alt=""> 
                    @endif

                    <h3 class="profile-username text-center">{{$paciente->user->name}}</h3>
                    
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                                <b>Fecha de registro</b> <a class="pull-right">{{$paciente->created_at->format('d M Y')}}</a>
                         </li>
                        <li class="list-group-item">
                        <b>N° de Historia</b> <a class="pull-right">{{$paciente->historia->id}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Última modificación de la historia médica</b> <a class="pull-right">{{$paciente->historia->updated_at->format('d M Y')}}</a>
                        </li>
                        
                    </ul>
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
                    <p class="text-muted">
                        {{$paciente->direccion}}
                    </p>
                    <strong><i class="fa fa-phone"></i> Teléfono</strong>
                    <p class="text-muted">
                        {{$paciente->telefono}}
                    </p>
                    <strong><i class="fa  fa-envelope-o"></i> correo</strong>
                    <p class="text-muted">
                        {{$paciente->user->email}}
                    </p>
                </div>
                
                

            </div>

        </div>
    
</div>

@stop 
@push('styles')

@endpush 
@push('scripts')

@endpush