@extends('layouts.layout')

@section('title', 'Editar Funcionário')

@section('content')
    <h1>Editar Funcionário</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('funcionarios.update', $funcionario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $funcionario->nome) }}" required>
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" value="{{ old('cargo', $funcionario->cargo) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $funcionario->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" value="{{ old('telefone', $funcionario->telefone) }}" placeholder="(00) 0 0000-0000" required>
        </div>
        <div class="mb-3">
            <label for="salario" class="form-label">Salário</label>
            <input type="number" class="form-control" id="salario" name="salario" value="{{ old('salario', $funcionario->salario) }}" placeholder="0000" required>
        </div>
        <button type="submit" class="btn btn-success">Atualizar</button>
        <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
