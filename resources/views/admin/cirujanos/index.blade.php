@extends('admin/layout')

@section('header')
<h1>
  Cirujanos
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Cirujanos</li>
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
          <th>Especialidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cirujanos as $cirujano)
        <tr>
          <td>{{$cirujano->id}}</td>
          <td>{{$cirujano->user->name}}</td>
          <td>{{$cirujano->especialidad->descripcion}}</td>
          <td>

          <a href="{{route('admin.cirujano.edit',$cirujano)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Modificar</a>
          <form action="{{route('admin.cirujano.delete',$cirujano)}}" onsubmit="return confirm('Seguro que quiere eliminar el registro?')" method="POST" style="display:inline">
              {{csrf_field()}} {{method_field('DELETE')}}
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