@extends('medico/layout')

@section('header')
<h1>
  Quirófanos 
  <small>Consultar quirófano</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('medico.dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('medico.quirofanos.index')}}"><i class="fa fa-dashboard"></i>Quirófanos</a></li>
  <li class="active">Consultar quirófano</li>
</ol>
@stop

@section('content')
<div class="row">
        <div class="col-md-4">

          
          <div class="box box-primary">
            <div class="box-body box-profile">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>ID</b> <a class="pull-right">{{$quirofano->id}}</a>
                </li>
                <li class="list-group-item">
                    <b>Número</b> <a class="pull-right">{{$quirofano->numero}}</a>
                </li>
                <li class="list-group-item">
                    <b>Clínica</b> <a class="pull-right">{{$quirofano->clinica->nombre}}</a>
                </li>
              </ul>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
          <!-- About Me Box -->
        <div class="col-md-8">  
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Descripción</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              {!!$quirofano->descripcion!!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
</div>        
@stop

@push('scripts')

@endpush