@extends('medico/layout')

@section('header')
<h1>
  Agenda
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('medico.dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Agenda</li>
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
          
        </tr>
      </thead>
      <tbody>
        @foreach($agendas as $agenda)
        <tr>
          <td>{{$agenda->reservacion->fecha->format('d M Y')}}</td>
          <td>{{$agenda->reservacion->quirofano->clinica->nombre}}</td>
          <td>{{$agenda->reservacion->quirofano->numero}}</td>
          <td>{{$agenda->reservacion->planificacion->paciente->user->name}}</td>

        </tr>
          @endforeach
        </tbody>
        
      </table>
    </div>
    
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
  
@stop
@push('styles')

@endpush
@push('scripts')
<script>
    
</script>
@endpush