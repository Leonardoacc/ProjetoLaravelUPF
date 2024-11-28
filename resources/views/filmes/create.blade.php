@extends('layouts.layout')

@section('content')
    <h1>Adicionar Novo Filme</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('filmes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" required>
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero" required>
        </div>
        <div class="mb-3">
            <label for="ano_lancamento" class="form-label">Ano de Lançamento</label>
            <input type="number" class="form-control" id="ano_lancamento" name="ano_lancamento" required>
        </div>
        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria</label>
            <select class="form-select" id="categoria_id" name="categoria_id" required>
                <option value="">Selecione uma categoria</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('filmes.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
