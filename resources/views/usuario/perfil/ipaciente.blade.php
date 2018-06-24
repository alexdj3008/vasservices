@extends('usuario.layout')


@section('content')
@if(auth()->user()->id==$user->id)
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar Datos</div>

                <div class="card-body">
                    <form method="POST" action="{{route('paciente.datos.update',$user)}}">
                            {{csrf_field()}} {{method_field('PUT')}} 
                        <div class="form-group">
                            <label >Nombre y apellido</label>
                            <input name='name' value="{{$user->name}}" placeholder="Ingrese su nombre" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Correo</label>
                            <input name='email' value="{{$user->email}}" type="email" placeholder="Ingrese su correo" class="form-control"
                                required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input name='password' value="" type="password" placeholder="Dejar en blanco si no desea cambiar la contraseña" class="form-control">
                        </div>
    
                        <div class="form-group">
                            <label for="password_confirmation">Confirmar contraseña</label>
                            <input name='password_confirmation' value="" type="password" placeholder="Confirmar nueva contraseña" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Dirección de residencia</label>
                            <textarea name='direccion' class="form-control" required autofocus>{{$user->paciente->direccion}} </textarea>
                        </div>
                        <div class="form-group">
                            <label >Teléfono</label>
                            <input name='telefono' value="{{$user->paciente->telefono}}" placeholder="Telefono" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label >Edad</label>
                            <input name='edad' value="{{$user->paciente->edad}}" placeholder="Edad" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <div class="dropzone"></div>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Imagen actual</label>
                            <div class="col-lg-6 about-img">
                                @if (is_null($user->paciente->imagen))
                                    <img width="100%" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
                                @else
                                    <img width="100%" src="{{url($user->paciente->imagen)}}" alt=""> 
                                @endif
                            </div>
                        </div>
                        <span class="help-block">Si desea mantener la foto actual, dejar en blanco la zona de imagen</span>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@else
    {{redirect()->route('paciente.datos.edit',auth()->user())}}
@endif

@push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.css"> 
@endpush 

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script>
    var myDropzone = new Dropzone('.dropzone', {
        url: '{{route('paciente.datos.storefoto',$user)}}',
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