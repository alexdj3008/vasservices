@extends('admin/layout')

@section('header')
<h1>
  Pacientes
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Pacientes</li>
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
          <th>Nombre</th>
          <th>Email</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($pacientes as $paciente)
        <tr>
          <td>{{$paciente->id}}</td>
          <td>{{$paciente->user->name}}</td>
          <td>{{$paciente->user->email}}</td>
          <td>
              <a href="{{route('admin.paciente.view',$paciente)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Ver detalles</a>
              <form action="{{route('admin.paciente.delete',$paciente)}}" onsubmit="return confirm('Seguro que quiere eliminar el registro?')" method="POST" style="display:inline">
                  {{csrf_field()}} {{method_field('PUT')}}
                <button href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> Eliminar</button>
              </form>
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