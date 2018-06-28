@extends('medico/layout')

@section('header')
<h1>
  Quirofanos
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('medico.dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Quirofanos</li>
</ol>
@stop

@section('content')
  
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Tabla de resumen de datos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="historias-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Numero</th>
          <th>Clinica</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($quirofanos as $quirofano)
        <tr>
          <td>{{$quirofano->id}}</td>
          <td>{{$quirofano->numero}}</td>
          <td>{{$quirofano->clinica->nombre}}</td>
          <td>
          <a href="{{route('medico.quirofano.view',$quirofano)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Ver detalles</a>
          
          </td>  
        </tr>
          @endforeach
        </tbody>
        
      </table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
@stop