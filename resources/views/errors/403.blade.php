@extends('usuario/layout')

@section('content')
    <div class="row">
        <div class="container">
            <h1>403 <span>Acceso no autorizado</span></h1>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <h2>No tienes permiso para entrar a esta zona.</h2>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <a class="btn-get-started scrollto" onclick="history.back()" href="#">Volver atrás</a>
        </div>
    </div>
@endsection