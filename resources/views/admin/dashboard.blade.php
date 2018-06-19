@extends('admin.layout')

@section('content')
    <h1>Dashboard</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
    
                    <div class="panel-body">
                        {!! $chart->html() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('styles')
{!! Charts::styles() !!}
@endpush
@push('scripts')
{!! Charts::scripts() !!}
{!! $chart->script() !!}
@endpush