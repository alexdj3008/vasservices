@extends('admin/layout')

@section('header')
<h1>
  Cirujanos
  <small>Editar cirujano</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('admin.cirujanos.index')}}"><i class="fa fa-dashboard"></i> Cirujano</a></li>
  <li class="active">Editar cirujano</li>
</ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.cirujano.update',$cirujano)}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}} {{method_field('PUT')}}   
                <div class="box-body">
                    <div class="form-group">
                        <label >Nombre del tipo de cirugía</label>
                    <input name='nombre' value="{{$cirujano->nombre}}" placeholder="Ingrese el nombre del tipo de cirugía" class="form-control" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label >Breve descripción del tipo de cirugía</label>
                        <textarea id="editor"  rows="10" name='descripcion' placeholder="Ingrese una breve descripción del tipo de cirugía" class="form-control">{{$cirujano->descripcion}}</textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label >Especialidad a la que pertenece el tipo de cirugía</label>
                        <select  name="especialidad" id="" class="form-control" required autofocus>
                            <option value="">Selecciona una especialidad</option>
                            @foreach($especialidades as $especialidad)
                                <option value="{{$especialidad->id}}"
                                    {{old('estado',$cirujano->especialidad_id)==$especialidad->id ? 'selected' : ''}} >
                                    
                                {{$especialidad->descripcion}}</option>

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

@push('scripts')
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    
    CKEDITOR.replace('editor');
    
</script>
@endpush