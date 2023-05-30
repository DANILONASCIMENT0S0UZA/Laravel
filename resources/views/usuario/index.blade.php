@extends('layouts.base')

@section('content')

<div class="container">

    <h1>Usuários</h1>

    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Criado em </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <th></th>
                <th>{{$usuario->name}}</th>
                <th>{{$usuario->email}}</th>
                <th>{{$usuario->created_at->format('d/m/Y')}}</th>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>


