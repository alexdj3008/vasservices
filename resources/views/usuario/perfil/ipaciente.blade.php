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
                            <input name='nombre' value="{{$user->name}}" placeholder="Ingrese el nombre del paciente" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            <input name='password' type="password" value="{{$user->password}}" placeholder="" class="form-control" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Dirección de residencia</label>
                            <textarea name='direccion' value="{{$user->name}}" placeholder="Ingrese el nombre del paciente" class="form-control" required autofocus> </textarea>
                        </div>
                        <div class="form-group">
                            <label >Edad</label>
                            <input name='edad' value="{{$user->name}}" placeholder="Ingrese el nombre del paciente" class="form-control" required autofocus>
                        </div>
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
    @section('content')
        <H1>Not allowed</H1>
    @endsection
@endif