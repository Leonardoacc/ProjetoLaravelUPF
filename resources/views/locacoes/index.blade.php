@extends('layouts.layout')

@section('title', 'Locações')

@section('content')
<div class="container mt-4">
    <h1>Locações</h1>
    <a href="{{ route('locacoes.create') }}" class="btn btn-primary mb-3">Adicionar Nova Locação</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Filme</th>
                <th>Data Locação</th>
                <th>Data Devolução</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($locacoes as $locacao)
            <tr>
                <td>{{ $locacao->id }}</td>
                <td>{{ $locacao->cliente->nome }}</td>
                <td>{{ $locacao->filme->titulo }}</td>
                <td>{{ $locacao->data_locacao }}</td>
                <td>{{ $locacao->data_devolucao }}</td>
                <td>
                    <a href="{{ route('locacoes.show', $locacao->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('locacoes.edit', $locacao->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('locacoes.destroy', $locacao->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
