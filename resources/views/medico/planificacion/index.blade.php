@extends('medico/layout')
@section('header')
<h1>
  Planificación
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('medico.dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Planificación</li>
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
          <th>Fecha</th>
          <th>Clínica</th>
          <th>Quirófano</th>
          <th>Paciente</th>
          <th>Planificacion</th>
        </tr>
      </thead>
      <tbody>
        @foreach($planificacions as $planificacion)
        <tr>
          <td>{{$planificacion->reservacion->fecha->format('d M Y')}}</td>
          <td>{{$planificacion->reservacion->quirofano->clinica->nombre}}</td>
          <td>{{$planificacion->reservacion->quirofano->numero}}</td>
          <td>{{$planificacion->paciente->user->name}}</td>
          <td>
            <a href="{{route('medico.planificacion.view',$planificacion)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Ver detalles</a>  
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

@push('scripts')

<script>
       
    
</script>
@endpush