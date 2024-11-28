@extends('layouts.layout')

@section('title', 'Detalhes do Funcionário')

@section('content')
    <h1>Detalhes do Funcionário</h1>

    <p><strong>ID:</strong> {{ $funcionario->id }}</p>
    <p><strong>Nome:</strong> {{ $funcionario->nome }}</p>
    <p><strong>Email:</strong> {{ $funcionario->email }}</p>
    <p><strong>Telefone:</strong> {{ $funcionario->telefone }}</p>
    <p><strong>Cargo:</strong> {{ $funcionario->cargo }}</p>
    <p><strong>Salário:</strong> {{ $funcionario->salario }}</p>

    <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
