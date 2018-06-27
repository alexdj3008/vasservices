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
                            <label >Especialidad</label>
                            <select name="especialidad" id="especialidades" class="form-control" required autofocus>
                                <option value="">Selecciona la especialidad</option>
                                @foreach ($especialidades as $especialidad)
                                <option value="{{$especialidad->id}}">{{$especialidad->descripcion}}</option>
                                @endforeach
                            </select>
                        </div>    
                        <div class="form-group">
                            <label >Tipo de cirugia</label>
                            <select name="tratamiento" id="tratamientos" class="form-control" required autofocus>
                                <option value="">Selecciona el tipo de cirugía</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Médico de preferencia</label>
                            <select name="cirujano" id="cirujanos"  class="form-control" required autofocus>
                                <option value="">Selecciona un cirujano</option>
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
                            <label>Responsable</label>
                            <input placeholder="Nombre de la persona que lo acompañará" class="form-control" type="text" name="responsable" id="" required autofocus>
                        </div>
                        <div class="form-group">
                            <label>Parentesco</label>
                            <select class="form-control" name="parentesco" id="" required autofocus>
                                <option value="">Selecciona el parentesco</option>
                                <option value="Hijo(a)">Hijo(a)</option>
                                <option value="Esposo(a)">Esposo(a)</option>
                                <option value="Madre">Madre</option>
                                <option value="Padre">Padre</option>
                                <option value="Tío(a)">Tío(a)</option>
                                <option value="Primo(a)">Primo(a)</option>
                                <option value="Abuelo(a)">Abuelo(a)</option>
                                <option value="Otro(a)">Otro(a)</option>
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