@extends('layouts.base')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        {!! Session::get('success')!!}
    </div>
    @endif

    <h1>{{$usuario->name}}</h1>
    <h2>
        <a class="btn btn-dark"
         href="{{ route('usuario.index') }}">
         <- Voltar
        </a>
    </h2>
    <p>
        Email:
        <a href="mailto:{{$usuario->email}}">
            {{$usuario->email}}
        </a>
    </p>
@endsection
