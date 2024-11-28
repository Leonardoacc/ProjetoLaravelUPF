@extends('layouts.layout')

@section('title', 'Detalhes do Pagamento')

@section('content')
    <h1>Detalhes do Pagamento</h1>

    <p><strong>ID:</strong> {{ $pagamento->id }}</p>
    <p><strong>Cliente:</strong> {{ $pagamento->cliente->nome }}</p>
    <p><strong>Valor:</strong> {{ $pagamento->valor }}</p>
    <p><strong>Data:</strong> {{ $pagamento->data }}</p>
    <p><strong>Método:</strong> {{ $pagamento->metodo }}</p>

    <a href="{{ route('pagamentos.index') }}" class="btn btn-secondary">Voltar</a>
@endsection
