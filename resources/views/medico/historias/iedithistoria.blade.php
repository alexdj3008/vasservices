@extends('admin/layout') @section('header')
<h1>
    Historias Médicas
    <small>Actualizar historia médica</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li>
        <a href="{{route('admin.clinicas.index')}}">
            <i class="fa fa-dashboard"></i> Historias Médicas</a>
    </li>
    <li class="active">Actualizar historia médica</li>
</ol>
@stop @section('content')
<div class="row">
    <form method="POST" action="{{route('medico.historia.update',$historia)}}">
        <div class="col-md-8">
            <div class="box box-primary">
                {{csrf_field()}} {{method_field('PUT')}}
                <div class="box-body">
                    <div class="form-group">
                        <label>Nombre de la Clínica</label>
                        <input name='nombre' value="{{$historia->id}}" placeholder="Ingrese el nombre de la clínica" class="form-control" required
                            autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Datos del paciente</h3>
                </div>
                <div class="box-body box-profile">
                    @if (is_null($historia->paciente->imagen))
                        <img class="profile-user-img img-responsive img-circle" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
                    @else
                        <img class="profile-user-img img-responsive img-circle" src="{{url($historia->paciente->imagen)}}" alt=""> 
                    @endif

                    <h3 class="profile-username text-center">{{$historia->paciente->user->name}}</h3>
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
                    <p class="text-muted">
                        {{$historia->paciente->direccion}}
                    </p>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </div>

        </div>
    </form>
</div>

@stop @push('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.css"> @endpush @push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
<script>

</script> @endpush