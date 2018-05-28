@extends('admin/layout')

@section('header')
<h1>
  Tipos de Cirugías
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Tipo de Cirugías</li>
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
        @foreach($tiposcirugias as $tipocirugia)
        <tr>
          <td>{{$tipocirugia->id}}</td>
          <td>{{$tipocirugia->nombre}}</td>
          <td>{{$tipocirugia->especialidad->descripcion}}</td>
          <td>

          <a href="{{route('admin.tipocirugia.edit',$tipocirugia)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"> Editar</i></a>
          <form action="{{route('admin.tipocirugia.delete',$tipocirugia)}}" onsubmit="return confirm('Seguro que quiere eliminar el registro?')" method="POST" style="display:inline">
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