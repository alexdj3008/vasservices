@extends('admin/layout')

@section('header')
<h1>
  Servicios Adicionales
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Servicios Adicionales</li>
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
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($servicios as $servicio)
        <tr>
          <td>{{$servicio->id}}</td>
          <td>{{$servicio->nombre}}</td>
          <td>
          <a href="{{route('admin.servicios.edit',$servicio)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
          <form action="{{route('admin.servicios.delete',$servicio)}}" onsubmit="return confirm('Seguro que quiere eliminar el registro?')" method="POST" style="display:inline">
              {{csrf_field()}} {{method_field('PUT')}}
            <button href="" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></button>
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