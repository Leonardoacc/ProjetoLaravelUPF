@extends('layouts.layout')

@section('content')
<div class="container mt-4">
    <h1>Filmes</h1>
    <a href="{{ route('filmes.create') }}" class="btn btn-primary mb-3">Adicionar Novo Filme</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filmes as $filme)
            <tr>
                <td>{{ $filme->id }}</td>
                <td>{{ $filme->titulo }}</td>
                <td>
                    <a href="{{ route('filmes.show', $filme->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('filmes.edit', $filme->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('filmes.destroy', $filme->id) }}" method="POST" style="display:inline;">
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
