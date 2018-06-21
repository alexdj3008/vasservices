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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach($historias as $historia)
        <tr>
          <td>{{$historia->id}}</td>
          <td>{{$historia->paciente->user->name}}</td>
          <td>{{$historia->paciente->direccion}}</td>
          <td>
            <a href="{{route('medico.historia.view',$historia)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Ver detalles</a>  
            <a href="{{route('medico.historia.edit',$historia)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
          
          </td>  
        </tr>
          @endforeach --}}
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