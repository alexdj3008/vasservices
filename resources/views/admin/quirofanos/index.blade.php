@extends('admin/layout')

@section('header')
<h1>
  Quirofanos
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
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
      <table id="clinicas-table" class="table table-bordered table-striped">
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
          <a href="{{route('admin.quirofanos.edit',$quirofano)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i></a>
          <form action="{{route('admin.quirofanos.delete',$quirofano)}}" onsubmit="return confirm('Seguro que quiere eliminar el registro?')" method="POST" style="display:inline">
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