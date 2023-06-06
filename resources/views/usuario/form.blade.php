@extends('layouts.base')

@section('content')
@if ($usuario)
<form action="{{ route('usuario.update',['id'=>$usuario->id]) }}" method="post">
@else
<form action="{{ route('usuario.store') }}" method="post">
    @endif

    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <label class="form-label" for="name">
                Nome*
            </label>
            <input class="form-control" type="text"
            name="name" id="name" value="{{$usuario!=null?$usuario->name:old('name') }}">
        </div>

        <div class="col-md-6">
            <label for="email" class="form-label">E-mail*</label>
            <input type="email" name="email" id="email" class="form-control" value="{{$usuario!=null?$usuario->email:old('email') }}">
        </div>

        <br><br><br><br>
        <div class="col-md-6">
            <label for="password" class="form-label">Senha*</label>
            <input type="password" name="password" id="password" class="form-control"  >
        </div>

        <br><br><br><br>
        <div class="col-md-6">
            <label for="" class="form-label">Confimar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"  >
        </div>

        <br><br><br><br>
        <div class="col-md-2">
            @if ($usuario)
                <input class="btn btn-warning" type="submit" value="Atualizar">
            @else
            <input class="btn btn-success" type="submit" value="Cadastrar">
            @endif
        </div>
    </div>
</form>

@endsection
