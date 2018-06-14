@extends('usuario.layout')

@section('content')

<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar Cita</div>

                <div class="card-body">
                    <form method="POST" action="{{route('paciente.citas.store')}}">
                            {{csrf_field()}} 
                        <div class="form-group">
                            <label >Tipo de cirugia</label>
                            <select name="tratamiento" id="" class="form-control" required autofocus>
                                <option value="">Selecciona el tipo de cirugía</option>
                                @foreach ($especialidades as $especialidad)
                                    <optgroup label="{{$especialidad->descripcion}}">
                                    @foreach($tratamientos as $tratamiento)
                                        @if ($tratamiento->especialidad_id==$especialidad->id)
                                            <option value="{{$tratamiento->id}}">{{$tratamiento->nombre}}</option>    
                                        @endif
                                    </optgroup>    
                                    @endforeach
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Médico de preferencia</label>
                            <select name="cirujano" id="" class="form-control" required autofocus>
                                <option value="">Selecciona el médico de preferencia</option>
                                
                                @foreach($cirujanos as $cirujano)
                                    <option value="{{$cirujano->id}}">{{$cirujano->user->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deseo contratar los siguientes servicios</label>
                            <select name='servicios[]' class="form-control select2" 
                                multiple="multiple" 
                                data-placeholder="Selecciona uno o mas servicios" style="width: 100%;" required autofocus>
                                @foreach($servicios as $servicio)
                                    <option value="{{$servicio->id}}">{{$servicio->nombre}}</option>
                                @endforeach
                            </select>
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


@push('styles')
<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
@endpush 

@push('scripts')
<script src="/adminlte/plugins/select2/select2.full.min.js"></script>
<script>
    $('.select2').select2();
</script>
@endpush