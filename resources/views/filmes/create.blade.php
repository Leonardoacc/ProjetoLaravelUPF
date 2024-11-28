@extends('layouts.layout')

@section('title', 'Adicionar Filme')

@section('content')
    <h1>Adicionar Filme</h1>

    <form action="{{ route('filmes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao"></textarea>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" id="categoria_id" name="categoria_id" required>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="ano_lancamento" class="form-label">Ano de Lançamento</label>
            <input type="number" class="form-control" id="ano_lancamento" name="ano_lancamento" required>
        </div>

        <button type="submit" class="btn btn-primary">Adicionar Filme</button>
    </form>
@endsection
