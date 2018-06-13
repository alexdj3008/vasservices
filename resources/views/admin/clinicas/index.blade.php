@extends('admin/layout')

@section('header')
<h1>
  Clinicas
  <small></small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li class="active">Clínicas</li>
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
          <th>Dirección</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($clinicas as $clinica)
        <tr>
          <td>{{$clinica->id}}</td>
          <td>{{$clinica->nombre}}</td>
          <td>{{$clinica->direccion}}</td>
          <td>

          <a href="{{route('admin.clinica.edit',$clinica)}}" class="btn btn-xs btn-info"><i class="fa fa-pencil"></i> Editar</a>
          <form action="{{route('admin.clinica.delete',$clinica)}}" onsubmit="return confirm('Seguro que quiere eliminar el registro?')" method="POST" style="display:inline">
              {{csrf_field()}} {{method_field('PUT')}}
            <button href="" class="btn btn-xs btn-danger" data-confirm="Are you sure you want to delete" data-toggle="modal" data-target="#myModal"><i class="fa fa-times"></i> Eliminar </button>
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

@push('scripts')

<script>
    
</script>
@endpush