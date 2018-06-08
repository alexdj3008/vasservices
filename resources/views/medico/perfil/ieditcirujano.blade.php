@extends('medico/layout') @section('header')
<h1>
    Perfil
    <small>Editar datos</small>
</h1>
{{--
<ol class="breadcrumb">
    <li>
        <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li>
        <a href="{{route('admin.cirujanos.index')}}">
            <i class="fa fa-dashboard"></i> Cirujano</a>
    </li>
    <li class="active">Editar cirujano</li>
</ol> --}} @stop @section('content')
<div class="row">
    <form method="POST" action="{{route('medico.cirujano.update',$user)}}">
        {{csrf_field()}} {{method_field('PUT')}}
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label>Nombre del cirujano</label>
                        <input name='name' value="{{$user->name}}" placeholder="Ingrese el nombre del cirujano" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label>Correo</label>
                        <input name='email' value="{{$user->email}}" type="email" placeholder="Ingrese el correo de la clínica" class="form-control"
                            required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input name='password' value="" type="password" placeholder="Ingrese el correo de la clínica" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirmar contraseña</label>
                        <input name='password_confirmation' value="" type="password" placeholder="Ingrese el correo de la clínica" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Breve descripción del cirujano</label>
                        <textarea id="editor" rows="10" name='descripcion' placeholder="Ingrese una breve descripción del cirujano" class="form-control">{{$user->cirujano->descripcion}}</textarea>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group">
                        <label>Especialidad a la que pertenece el cirujano</label>
                        <select name="especialidad" id="" class="form-control" required autofocus>
                            <option value="">Selecciona una especialidad</option>
                            @foreach($especialidades as $especialidad)
                            <option value="{{$especialidad->id}}" {{old( 'estado',$user->cirujano->especialidad_id)==$especialidad->id ? 'selected' : ''}} > {{$especialidad->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Clínicas que realizan esta cirugia</label>
                        <select name='clinicas[]' class="form-control select2" 
                            multiple="multiple" 
                            data-placeholder="Selecciona una o mas clínicas" style="width: 100%;" required autofocus>
                            @foreach($clinicas as $clinica)
                                <option {{collect(old('clinicas', auth()->user()->cirujano->clinicas->pluck('id')))->contains($clinica->id) ? 'selected'
                                    : '' }} value="{{$clinica->id}}" >
                                    {{$clinica->nombre}},{{$clinica->estado->nombre}}
                                </option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label>Imagen</label>
                        <div class="dropzone"></div>
                    </div>

                    <div class="form-group">
                        <label for="">Imagen actual</label>
                        <div class="col-md-12">
                            @if (is_null($user->cirujano->imagen))
                                <img class="img-responsive" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
                            @else
                                <img class="img-responsive" src="{{url($user->cirujano->imagen)}}" alt=""> 
                            @endif
                        </div>
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
<link rel="stylesheet" href="http://localhost/vas/public/adminlte/plugins/select2/select2.min.css">
@endpush 

@push('scripts')
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script src="http://localhost/vas/public/adminlte/plugins/select2/select2.full.min.js"></script>
<script>
    
    $('.select2').select2();    

    CKEDITOR.replace('editor');

    var myDropzone = new Dropzone('.dropzone', {
        url: '{{route('medico.cirujano.storefoto',$user)}}',
        acceptedFiles: 'image/*',
        paramName: 'foto',
        maxFilesize: 2,
        addRemoveLinks: true,
        maxFiles: 1,
        headers: { 
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        },
        dictDefaultMessage: 'Arrastra una foto aquí o presiona para seleccionar'
    });
    myDropzone.on('error', function (file, res) {
        console.log(res);

    });

    Dropzone.autoDiscover = false;
</script> @endpush