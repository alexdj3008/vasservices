@extends('admin/layout')

@section('header')
<h1>
  Clínicas
  <small>Editar Clínica</small>
</h1>
<ol class="breadcrumb">
  <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> Inicio</a></li>
  <li><a href="{{route('admin.clinicas.index')}}"><i class="fa fa-dashboard"></i> Clinicas</a></li>
  <li class="active">Editar Clínica</li>
</ol>
@stop

@section('content')
<div class="row">
    <form method="POST" action="{{route('admin.clinica.update',$clinica)}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}} {{method_field('PUT')}}   
                <div class="box-body">
                    <div class="form-group">
                        <label >Nombre de la Clínica</label>
                    <input name='nombre' value="{{$clinica->nombre}}" placeholder="Ingrese el nombre de la clínica" class="form-control" required autofocus>
                    </div>
                    <div class="form-group {{$errors->has('rif')?'has-error':''}}">
                        <label >Rif de la Clínica</label>
                        <input name='rif' value="{{$clinica->rif}}" placeholder="Ingrese el rif de la clínica" class="form-control" required autofocus>
                        {!!$errors->first('rif','<span class="help-block">:message</span>')!!}
                    </div>
                    <div class="form-group">
                        <label >Breve descripción de la Clínica</label>
                        <textarea id="editor"  rows="10" name='descripcion' placeholder="Ingrese una breve descripción de la clínica" class="form-control">{{$clinica->descripcion}}</textarea>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label >Estado donde se encuentra la Clínica</label>
                        <select  name="estado" id="" class="form-control" required autofocus>
                            <option value="">Selecciona un estado</option>
                            @foreach($estados as $estado)
                                <option value="{{$estado->id}}"
                                    {{old('estado',$clinica->estado_id)==$estado->id ? 'selected' : ''}} >
                                    
                                {{$estado->nombre}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label >Dirección exacta de la Clínica</label>
                        <textarea rows="10" name='direccion' placeholder="Ingrese la dirección exacta de la clínica" class="form-control" required autofocus>{{$clinica->direccion}}</textarea>
                    </div>
                    <div class="form-group">
                        <label >Correo</label>
                        <input name='email' value="{{$clinica->email}}" type="email" placeholder="Ingrese el correo de la clínica" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <div class="dropzone"></div>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>
    
    CKEDITOR.replace('editor');
    
    var myDropzone =  new Dropzone('.dropzone',{
        url:'{{route('admin.clinica.storefoto',$clinica)}}',
        acceptedFiles:'image/*',
        paramName:'foto',
        maxFilesize: 2 ,
        maxFiles:1,
        headers:{
            'X-CSRF-TOKEN':'{{csrf_token()}}'
        },
        dictDefaultMessage:'Arrastra una foto aquí para subirla'
    });
    myDropzone.on('error',function(file,res){
        console.log(res);
            
    });

    Dropzone.autoDiscover=false;
</script>
@endpush