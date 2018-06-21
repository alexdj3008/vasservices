@extends('medico/layout') @section('header')
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
        <a href="{{route('medico.historias.index')}}">
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
                    <div class="form-group col-md-4">
                        <label>Grupo Sanguíneo</label>
                        <select name="gruposanguineo" class="form-control">
                            <option value="">Seleccione</option>
                            <option value="A+"
                            {{old('gruposanguineo',$historia->gruposanguineo)=='A+' ? 'selected' : ''}}>A+</option>
                            <option value="A-" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='A-' ? 'selected' : ''}}>A-</option>
                            <option value="B+" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='B+' ? 'selected' : ''}}>B+</option>
                            <option value="B-" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='B-' ? 'selected' : ''}}>B-</option>
                            <option value="AB+" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='AB+' ? 'selected' : ''}}>AB+</option>
                            <option value="AB-" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='AB-' ? 'selected' : ''}}>AB-</option>
                            <option value="O+" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='O+' ? 'selected' : ''}}>O+</option>
                            <option value="A-" 
                            {{old('gruposanguineo',$historia->gruposanguineo)=='O-' ? 'selected' : ''}}>O-</option>
                        </select>
                        
                    </div>
                    <div class="form-group col-md-4">
                            <label>Peso(kg)</label>
                            <input name='peso' value="{{$historia->peso}}"  class="form-control" >
                    </div>
                    <div class="form-group col-md-4">
                            <label>Talla(cm)</label>
                            <input name='talla' value="{{$historia->talla}}"  class="form-control" >
                    </div>
                    <div class="form-group col-md-6">
                            <label>Respiración</label>
                            <input name='respiracion' value="{{$historia->respiracion}}"  class="form-control" >
                    </div>
                    <div class="form-group col-md-6">
                            <label>Presión arterial</label>
                            <input name='presionarterial' value="{{$historia->presionarterial}}"  class="form-control" >
                    </div>
                    <div class="form-group col-md-6">
                            <label>Latidos</label>
                            <input name='latidos' value="{{$historia->latidos}}"  class="form-control" >
                    </div>
                    <div class="form-group col-md-6">
                            <label>Glicemia</label>
                            <input name='glicemia' value="{{$historia->glicemia}}"  class="form-control" >
                    </div>
                    <div class="form-group">
                            <label>Patologías</label>
                            <textarea name="patologias" class="form-control"  rows="5">{{$historia->patologias}}</textarea>
                    </div>
                    <div class="form-group">
                            <label>Traumatismos</label>
                            <textarea name="traumatismos" class="form-control"  rows="5">{{$historia->traumatismos}}</textarea>
                    </div>
                    <div class="form-group">
                            <label>Tratamientos</label>
                            <textarea name="tratamientos" class="form-control"  rows="5">{{$historia->tratamientos}}</textarea>
                            
                    </div>
                    <div class="form-group">
                            <label>Medicamentos</label>
                            <textarea name="medicamentos" class="form-control"  rows="5">{{$historia->medicamentos}}</textarea>
                    </div>
                    <div class="form-group">
                            <label>Diagnóstico</label>
                            <textarea name="diagnostico" class="form-control"  rows="5">{{$historia->diagnostico}}</textarea>
                    </div>
                    <div class="form-group">
                            <label>Indicaciones</label>
                            <textarea name="indicaciones" class="form-control"  rows="5">{{$historia->indicaciones}}</textarea>
                    </div>
                    <div class="form-group">
                            <label>Observaciones</label>
                            <textarea name="observaciones" class="form-control"  rows="5">{{$historia->observaciones}}</textarea>
                    </div>
                    
                    <div class="form-group">
                            <label>Antecedentes</label>
                            <textarea name="antecedentes" class="form-control"  rows="5">{{$historia->antecedentes}}</textarea>
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
                    
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                        <b>N° de Historia</b> <a class="pull-right">{{$historia->id}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Última modificación</b> <a class="pull-right">{{$historia->updated_at->format('d M Y')}}</a>
                        </li>
                        
                    </ul>
                    <strong><i class="fa fa-map-marker margin-r-5"></i> Dirección</strong>
                    <p class="text-muted">
                        {{$historia->paciente->direccion}}
                    </p>
                    <strong><i class="fa fa-phone"></i> Teléfono</strong>
                    <p class="text-muted">
                        {{$historia->paciente->telefono}}
                    </p>
                    <strong><i class="fa  fa-envelope-o"></i> correo</strong>
                    <p class="text-muted">
                        {{$historia->paciente->user->email}}
                    </p>
                
                    <div class="form-group">
                        <button type="submit" class=" form- control btn btn-primary">Guardar</button>
                    </div>

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