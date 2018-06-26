@extends('usuario/layout')

@section('content')
  
<br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="card">
        <div class="card-header">Tabla de resumen de datos</div>
          <div class="card-body">
            <table id="historias-table" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Fecha</th>
                  <th>Clínica</th>
                  <th>Tipo de cirugía</th>
                  <th>Quirófano</th>
                  <th>Paciente</th>
                  <th>Planificacion</th>
                </tr>
              </thead>
              <tbody>
              @foreach($planificacions as $planificacion)
                <tr>
                  <td>{{$planificacion->reservacion->fecha->format('d M Y')}}</td>
                  <td>{{$planificacion->reservacion->quirofano->clinica->nombre}}</td>
                  <td>{{$planificacion->tipo_cirugia->nombre}}</td>
                  <td>{{$planificacion->reservacion->quirofano->numero}}</td>
                  <td>{{$planificacion->paciente->user->name}}</td>
                  <td>
                    <a href="{{route('paciente.planificacion.view',$planificacion)}}" class="btn btn-xs btn-default"><i class="fa fa-eye"></i> Ver detalles</a>  
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>  
    </div>
  </div>

  @stop

@push('scripts')

<script>
       
    
</script>
@endpush