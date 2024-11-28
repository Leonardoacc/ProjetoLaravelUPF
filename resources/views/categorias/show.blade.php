@extends('layouts.layout')

@section('content')
    <h1>Detalhes da Categoria</h1>

    <p><strong>ID:</strong> {{ $categoria->id }}</p>
    <p><strong>Nome:</strong> {{ $categoria->nome }}</p>

    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
