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
                                @foreach($tratamientos as $tratamiento)
                                    <option value="{{$tratamiento->id}}">{{$tratamiento->nombre}}</option>
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

@endpush 

@push('scripts')

@endpush