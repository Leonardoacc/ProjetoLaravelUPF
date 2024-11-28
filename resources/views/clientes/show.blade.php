@extends('layouts.layout')

@section('title', 'Detalhes do Cliente')

@section('content')
<div class="container">
    <h1>Detalhes do Cliente</h1>
    <p><strong>ID:</strong> {{ $cliente->id }}</p>
    <p><strong>Nome:</strong> {{ $cliente->nome }}</p>
    <p><strong>Email:</strong> {{ $cliente->email }}</p>
    <p><strong>Telefone:</strong> {{ $cliente->telefone }}</p>
    <p><strong>Endereço:</strong> {{ $cliente->endereco }}</p>
    <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
</div>
@endsection
