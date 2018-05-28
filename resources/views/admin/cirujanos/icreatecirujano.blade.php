@extends('admin/layout')

@section('header')
<h1>
  Cirujanos
  <small>Crear Cirujano</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('admin.cirujanos.index')}}"><i class="fa fa-dashboard"></i>Cirujanos</a></li>
  <li class="active">Crear Cirujano</li>
</ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.cirujanos.store')}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}}    
                <div class="box-body">
                    <div class="form-group">
                        <label >Nombre del Cirujano</label>
                        <input name='nombre' placeholder="" class="form-control" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label >Breve descripción del tipo del cirujano</label>
                        <textarea id="editor" rows="10" name='descripcion'  class="form-control"></textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label >Especialidad a la que pertenece el cirujano</label>
                        <select name="especialidad_id" id="" class="form-control" required autofocus>
                            <option value="">Selecciona una especialidad</option>
                            @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}">{{$especialidad->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>

                    
                  
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>    
@stop

@push('styles')
<link rel="stylesheet" href="http://localhost/vas/public/adminlte/plugins/select2/select2.min.css">
<link rel="stylesheet" href="http://localhost/vas/public/adminlte/plugins/select2/select2.min.css">
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="http://localhost/vas/public/adminlte/plugins/select2/select2.full.min.js"></script>
<script>
    
    CKEDITOR.replace('editor');
    $('.select2').select2();
</script>
@endpush