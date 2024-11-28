@extends('layouts.layout')

@section('title', 'Detalhes da Locação')

@section('content')
<h1>Detalhes da Locação</h1>

<p><strong>ID:</strong> {{ $locacao->id }}</p>
<p><strong>Cliente:</strong> {{ $locacao->cliente->nome }}</p>
<p><strong>Filme:</strong> {{ $locacao->filme->titulo }}</p>
<p><strong>Data de Locação:</strong> {{ $locacao->data_locacao }}</p>
<p><strong>Data de Devolução:</strong> {{ $locacao->data_devolucao }}</p>

<a href="{{ route('locacoes.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
