@extends('usuario/layout') 
@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        
            
                    <div class="col-md-4">
                        <p><strong>Fecha:</strong>{{$planificacion->reservacion->fecha->format('d M Y')}}</p>
                        <p><strong>Clínica:</strong>{{$planificacion->reservacion->quirofano->clinica->nombre}}</p>
                        <p><strong>Quirófano:</strong>{{$planificacion->reservacion->quirofano->numero}}</p>
                    </div>
                              <div class="col-md-4">
                                <strong>Personal Quirúrgico</strong>
                                @foreach($planificacion->personals as $personal)
                                    <p><strong>Nombre:</strong>{{$personal->nombre}}</p>
                                    <p><strong>Cargo:</strong>{{$personal->cargo}}</p>
                                @endforeach
                              </div>
                              <div class="col-md-4">
                                <strong>Insumos</strong>
                                @foreach($planificacion->insumos as $insumo)
                                    <p><strong>Descripcion:</strong>{{$insumo->descripcion}}</p>
                                @endforeach
                              </div>
                              <div class="col-md-12">
                                    <strong><i class="fa fa-pencil margin-r-5"></i> Servicios contratados</strong>
                                        <p>
                                            @foreach($planificacion->servicios as $servicios)
                                                <span class="label label-success">{{$servicios->nombre}}</span>
                                            @endforeach
                                        </p>
                              </div>   
        
    </div>
</div>

@stop @push('styles')

@endpush 
@push('scripts')
@endpush