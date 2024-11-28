@extends('layouts.layout')

@section('title', 'Detalhes do Filme')

@section('content')
    <h1>{{ $filme->titulo }}</h1>

    <p><strong>Descrição:</strong> {{ $filme->descricao }}</p>
    <p><strong>Categoría:</strong> {{ $filme->categoria->nome }}</p>
    <p><strong>Ano de Lançamento:</strong> {{ $filme->ano_lancamento }}</p>

    <a href="{{ route('filmes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
