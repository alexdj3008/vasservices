@extends('admin/layout')

@section('header')
<h1>
  Planificar Cirugias
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Planificar Cirugias</li>
</ol>
@stop

@section('content')
  
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Tabla de resumen de datos</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table id="clinicas-table" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>ID</th>
          <th>Nombre del paciente</th>
          <th>Nombre del médico</th>
          <th>Tipo de cirugía</th>
          <th>Fecha de realización</th>
          <th>Estatus</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($citas as $cita)
        <tr>
          <td>{{$cita->id}}</td>
          <td>{{$cita->paciente->user->name}}</td>
          <td>{{$cita->cirujano->user->name}}</td>
          <td>{{$cita->tipo_cirugia->nombre}}</td>
          @if (is_null($cita->reservacion_id))
            <td>Sin fecha</td>
          @else
            <td>{{$cita->reservacion_id}}</td>  
          @endif
          @if($cita->estatus=="A")
            <td>Planificación realizada</td>
            <td>
              <a href="{{route('admin.planificar.edit',$cita)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
            </td>
          @endif
          @if($cita->estatus=="P")
            <td>Planificación pendiente</td>
            <td>
              <a href="{{route('admin.planificar.edit',$cita)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
            </td>
          @endif 
          @if($cita->estatus=="D")
            <td>Paciente dado de alta</td>
            <td>
            <a href="{{route('admin.planificar.edit',$cita)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
          </td>
          @endif  
          @if($cita->estatus=="R")
            <td>Cirugía realizada</td>
            <td>
              <a href="{{route('admin.planificar.edit',$cita)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
            </td>
          @endif 
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