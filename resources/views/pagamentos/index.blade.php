@extends('layouts.layout')

@section('title', 'Pagamentos')

@section('content')
    <h1>Pagamentos</h1>
    <a href="{{ route('pagamentos.create') }}" class="btn btn-primary mb-3">Adicionar Novo Pagamento</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Locação ID</th>
                <th>Valor</th>
                <th>Método de Pagamento</th>
                <th>Data do Pagamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pagamentos as $pagamento)
                <tr>
                    <td>{{ $pagamento->id }}</td>
                    <td>{{ $pagamento->locacao->cliente->nome }}</td>
                    <td>{{ $pagamento->locacao_id }}</td>
                    <td>{{ $pagamento->valor }}</td>
                    <td>{{ $pagamento->metodo_pagamento }}</td>
                    <td>{{ $pagamento->data_pagamento }}</td>
                    <td>
                        <a href="{{ route('pagamentos.edit', $pagamento->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('pagamentos.destroy', $pagamento->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
