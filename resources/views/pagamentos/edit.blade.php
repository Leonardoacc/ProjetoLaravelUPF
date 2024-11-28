@extends('layouts.layout')

@section('title', 'Editar Pagamento')

@section('content')
    <h1>Editar Pagamento</h1>

    <form action="{{ route('pagamentos.update', $pagamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="locacao_id" class="form-label">Cliente e Locação</label>
            <select name="locacao_id" id="locacao_id" class="form-control" required>
                <option value="">Selecione uma locação</option>
                @foreach($locacoes as $locacao)
                    <option value="{{ $locacao->id }}" {{ $pagamento->locacao_id == $locacao->id ? 'selected' : '' }}>
                        Cliente: {{ $locacao->cliente->nome }} | Locação ID: {{ $locacao->id }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" step="0.01" class="form-control" id="valor" name="valor" value="{{ $pagamento->valor }}" required>
        </div>
        <div class="mb-3">
            <label for="metodo_pagamento" class="form-label">Método de Pagamento</label>
            <select name="metodo_pagamento" id="metodo_pagamento" class="form-control" required>
                <option value="">Selecione o método de pagamento</option>
                @foreach($metodosPagamento as $metodo)
                    <option value="{{ $metodo }}" {{ $pagamento->metodo_pagamento == $metodo ? 'selected' : '' }}>
                        {{ $metodo }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="data_pagamento" class="form-label">Data do Pagamento</label>
            <input type="date" class="form-control" id="data_pagamento" name="data_pagamento" value="{{ $pagamento->data_pagamento }}" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('pagamentos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
