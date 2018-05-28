@extends('medico.layout')

@section('content')
    <h1>Dashboard</h1>
<p>Usuario autenticado: {{auth()->user()->name}}</p>
@stop