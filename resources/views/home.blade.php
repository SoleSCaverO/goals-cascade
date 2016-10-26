@extends('layouts.panel')
@section('title','Bienvenido')
@section('view','Cascada de metas')
@section('styles')
    <style>
        .cascade
        {
            width: 350px;
            height: 460px;
        }
    </style>
@endsection
@section('content')
    <div class="row text-center">
        <div class="col-md-6 col-md-offset-3">
            <img src="{{asset('assets/img/cascade.png')}}" class="cascade" alt="Cascada de metas - cobit 5">
        </div>
    </div>
@endsection