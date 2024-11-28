@extends('layouts.layout')

@section('title', 'Editar Locação')

@section('content')
<h1>Editar Locação</h1>

<form action="{{ route('locacoes.update', $locacao->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="cliente_id" class="form-label">Cliente</label>
        <select class="form-select" id="cliente_id" name="cliente_id" required>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $locacao->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="filme_id" class="form-label">Filme</label>
        <select class="form-select" id="filme_id" name="filme_id" required>
            @foreach($filmes as $filme)
                <option value="{{ $filme->id }}" {{ $locacao->filme_id == $filme->id ? 'selected' : '' }}>
                    {{ $filme->titulo }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="data_locacao" class="form-label">Data de Locação</label>
        <input type="date" class="form-control" id="data_locacao" name="data_locacao" value="{{ $locacao->data_locacao }}" required>
    </div>
    <div class="mb-3">
        <label for="data_devolucao" class="form-label">Data de Devolução</label>
        <input type="date" class="form-control" id="data_devolucao" name="data_devolucao" value="{{ $locacao->data_devolucao }}" required>
    </div>
    <button type="submit" class="btn btn-success">Atualizar</button>
    <a href="{{ route('locacoes.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
