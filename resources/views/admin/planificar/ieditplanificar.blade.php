@extends('admin/layout') 
@section('header')
<h1>
    Cirugias
    <small>Planificar Cirugía</small>
</h1>
<ol class="breadcrumb">
    <li>
        <a href="{{route('dashboard')}}">
            <i class="fa fa-dashboard"></i> Inicio</a>
    </li>
    <li>
        <a href="{{route('admin.planificar.index')}}">
            <i class="fa fa-dashboard"></i> Cirugias</a>
    </li>
    <li class="active">Planificar Cirugía</li>
</ol>
@stop 
@section('content')
<div class="col-md-12">
<div class="box box-primary">
<div class="box-body">
<div class="col-md-3">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Datos del cirujano</h3>
        </div>
        <div class="box-body box-profile">
            @if (is_null($planificacion->cirujano->imagen))
                <img class="profile-user-img img-responsive img-circle" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
            @else
                <img class="profile-user-img img-responsive img-circle" src="{{url($planificacion->cirujano->imagen)}}" alt=""> 
            @endif

            <h3 class="profile-username text-center">{{$planificacion->cirujano->user->name}}</h3>
            
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                    <b>Especialidad</b> <a class="pull-right">{{$planificacion->cirujano->especialidad->descripcion}}</a>
                </li>
            </ul>
            
            <strong><i class="fa fa-phone"></i> Teléfono</strong>
            <p class="text-muted">
                {{$planificacion->cirujano->telefono}}
            </p>
            <strong><i class="fa  fa-envelope-o"></i> correo</strong>
            <p class="text-muted">
                {{$planificacion->cirujano->user->email}}
            </p>
        </div>
    </div>        
        
</div>
<div class="col-md-3">
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Datos del paciente</h3>
        </div>
        <div class="box-body box-profile">
            @if (is_null($planificacion->paciente->imagen))
                <img class="profile-user-img img-responsive img-circle" src="http://localhost/vas/public/img/noimagen.png" alt=""> 
            @else
                <img class="profile-user-img img-responsive img-circle" src="{{url($planificacion->paciente->imagen)}}" alt=""> 
            @endif

            <h3 class="profile-username text-center">{{$planificacion->paciente->user->name}}</h3>
            
            <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                <b>N° de Historia</b> <a class="pull-right">{{$planificacion->paciente->historia->id}}</a>
                </li>
                <li class="list-group-item">
                    <b>Ultima modificación</b> <a class="pull-right">{{$planificacion->paciente->historia->updated_at->format('d/m/Y')}}</a>
                </li>
                
            </ul>
            <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
            <p class="text-muted">
                {{$planificacion->paciente->direccion}}
            </p>
            <strong><i class="fa fa-phone"></i> Teléfono</strong>
            <p class="text-muted">
                {{$planificacion->paciente->telefono}}
            </p>
            <strong><i class="fa  fa-envelope-o"></i> correo</strong>
            <p class="text-muted">
                {{$planificacion->paciente->user->email}}
            </p>
        </div>
    </div>        
        
</div>
<div class="col-md-6">
    <form method="POST" action="{{route('admin.planificar.update',$planificacion)}}">
        {{csrf_field()}} {{method_field('PUT')}}    
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Datos de la cirugía</h3>
                </div>
                <div class="box-body">
                    <div class="form-group col-md-12">
                            <label>Clínica</label>
                            <select name="clinica" id="" class="form-control">
                                <option value="">Selecciona una clínica</option>
                                @foreach($planificacion->cirujano->clinicas as $clinica)
                                    <option value="{{$clinica->id}}">
                                        {{$clinica->nombre}}
                                    </option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group col-md-12">
                            <label>Quirófano</label>
                            <select name="quirofano" id="" class="form-control">
                                <option value="">Selecciona el quirófano</option>
                                @foreach($planificacion->cirujano->clinicas as $clinica)
                                @foreach($clinica->quirofanos as $quirofano)
                                    <option value="{{$quirofano->id}}">
                                        {{$quirofano->numero}}
                                    </option>
                                @endforeach
                                @endforeach
                            </select>
                    </div>
                    <!-- Date -->
                    <div class="form-group col-md-12">
                        <label>Fecha de cirugía:</label>
    
                        <div class="input-group date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input name="fecha" type="text" class="form-control pull-right" id="datepicker">
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group -->
                    <div class=row id="personalquirurgico">
                    <div class="form-group col-md-12">
                        <label >Personal Médico</label>
                        <input name='nombre' value="" type="text" placeholder="Nombre del personal" class="form-control" required autofocus>
                        <label for="tipo">Cargo</label>
                        <input name='cargo' value="" type="text" placeholder="Cargo del personal" class="form-control" required autofocus>
                    </div>
                    </div>
                    <div class="form_group col-md-2">
                            <input type="button" class="btn btn-xs btn-success form-control" id="add_cancion()" onClick="addCancion()" value="+" />
                        </div>
                    <div class="form-group col-md-12">
                        <label>Insumos médicos necesarios en la cirugía</label>
                        <select name='insumos[]' class="form-control select2" 
                            multiple="multiple" 
                            data-placeholder="Selecciona una o mas insumos" style="width: 100%;" required autofocus>
                        </select>
                    </div>

                    
                    <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>

</div>
</div>
</div>
</div>
@stop 

@push('styles')
<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/dropzone.css"> @endpush @push('scripts')
<link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.0.1/min/dropzone.min.js"></script>
<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/adminlte/plugins/select2/select2.full.min.js"></script>
<script>
    a = 0;
    function addCancion(){
        a++;
        var div = document.createElement('div');
        div.setAttribute('class', 'from-group col-md-12');
        div.innerHTML = '<label >Personal Médico</label><input  name="nombre_'+a+'" value="" type="text" placeholder="Nombre del personal" class="form-control" required autofocus><label for="tipo">Cargo</label><input name="cargo_'+a+'" value="" type="text" placeholder="Cargo del personal" class="form-control" required autofocus>';
        document.getElementById('personalquirurgico').appendChild(div);document.getElementById('personalquirurgico').appendChild(div);
    }

    $('#datepicker').datepicker({
      autoclose: true
    });
    
    $('.select2').select2({
        tags:true
    }); 
</script>
@endpush