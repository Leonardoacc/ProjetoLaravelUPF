@extends('layouts.layout')

@section('content')
    <h1>Detalhes do Filme</h1>

    <p><strong>ID:</strong> {{ $filme->id }}</p>
    <p><strong>Título:</strong> {{ $filme->titulo }}</p>
    <p><strong>Categoria:</strong> {{ $filme->categoria->nome }}</p>
    <p><strong>Ano de Lançamento:</strong> {{ $filme->ano_lancamento }}</p>

    <a href="{{ route('filmes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection