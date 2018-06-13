@extends('admin/layout')

@section('header')
<h1>
  Servicios Adicionales
  <small>Añadir servicio adicional</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('admin.servicios.index')}}"><i class="fa fa-dashboard"></i>Servicios Adicionales</a></li>
  <li class="active">Añadir servicio adicional</li>
</ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.servicios.store')}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}}    
                <div class="box-body">
                    <div class="form-group">
                        <label >Nombre del servicio</label>
                        <input name='nombre' placeholder="Ingrese el nombre del servicio" class="form-control" required autofocus>
                    </div>
                    
                    <div class="form-group">
                        <label >Breve descripción del servicio</label>
                        <textarea id="editor" rows="10" name='descripcion' placeholder="Ingrese una breve descripción del servicio" class="form-control"></textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                                     
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