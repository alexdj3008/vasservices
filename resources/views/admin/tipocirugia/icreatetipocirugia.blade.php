@extends('admin/layout')

@section('header')
<h1>
  Tipos de Cirugías
  <small>Crear tipo de cirugía</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('admin.tipocirugia.index')}}"><i class="fa fa-dashboard"></i>Tipos de Cirugías</a></li>
  <li class="active">Crear tipo de cirugía</li>
</ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.tipocirugia.store')}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}}    
                <div class="box-body">
                    <div class="form-group">
                        <label >Nombre del Tipo de Cirugía</label>
                        <input name='nombre' placeholder="Ingrese el nombre del Tipo de Cirugía" class="form-control" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label >Breve descripción del tipo de cirugía</label>
                        <textarea id="editor" rows="10" name='descripcion' placeholder="Ingrese una breve descripción del tipo de cirugía" class="form-control"></textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label >Especialidad a la que pertenece el tipo de cirugía</label>
                        <select name="especialidad" id="" class="form-control" required autofocus>
                            <option value="">Selecciona una especialidad</option>
                            @foreach($especialidades as $especialidad)
                        <option value="{{$especialidad->id}}">{{$especialidad->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Clínicas que realizan esta cirugia</label>
                        <select name='clinicas[]' class="form-control select2" 
                            multiple="multiple" 
                            data-placeholder="Selecciona una o mas clínicas" style="width: 100%;" required autofocus>
                            @foreach($clinicas as $clinica)
                                <option value="{{$clinica->id}}">{{$clinica->nombre}},{{$clinica->estado->nombre}}</option>
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
<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="/adminlte/plugins/select2/select2.full.min.js"></script>
<script>
    
    CKEDITOR.replace('editor');
    $('.select2').select2();
</script>
@endpush