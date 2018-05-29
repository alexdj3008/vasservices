@extends('admin/layout')

@section('header')
<h1>
  Clínicas
  <small>Crear Clínica</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('admin.clinicas.index')}}"><i class="fa fa-dashboard"></i> Clinicas</a></li>
  <li class="active">Crear Clínica</li>
</ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.clinicas.store')}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}}    
                <div class="box-body">
                    <div class="form-group">
                        <label >Nombre de la Clínica</label>
                    <input name='nombre' value="{{old('nombre')}}" placeholder="Ingrese el nombre de la clínica" class="form-control" required autofocus>
                    </div>
                    <div class="form-group {{$errors->has('rif')?'has-error':''}}">
                        <label >Rif de la Clínica</label>
                        <input name='rif' value="{{old('rif')}}" placeholder="Ingrese el rif de la clínica" class="form-control" required autofocus>
                        {!!$errors->first('rif','<span class="help-block">:message</span>')!!}
                        
                    </div>
                    <div class="form-group">
                        <label >Breve descripción de la Clínica</label>
                        <textarea id="editor" rows="10" name='descripcion' placeholder="Ingrese una breve descripción de la clínica" class="form-control">{{old('descripcion')}}</textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label >Estado donde se encuentra la Clínica</label>
                        <select name="estado" id="" class="form-control" required autofocus>
                            <option value="">Selecciona un estado</option>
                            @foreach($estados as $estado)
                        <option value="{{$estado->id}}">{{$estado->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Dirección exacta de la Clínica</label>
                        <textarea rows="10" name='direccion' placeholder="Ingrese la dirección exacta de la clínica" class="form-control" required autofocus>{{old('direccion')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Correo</label>
                        <input name='email' value="{{old('email')}}" type="email" placeholder="Ingrese el correo de la clínica" class="form-control" required autofocus>
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