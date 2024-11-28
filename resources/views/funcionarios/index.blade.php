@extends('layouts.layout')

@section('title', 'Funcionários')

@section('content')
    <h1>Funcionários</h1>

    <a href="{{ route('funcionarios.create') }}" class="btn btn-primary mb-3">Adicionar Novo Funcionário</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cargo</th>
                <th>Salário</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
                <tr>
                    <td>{{ $funcionario->id }}</td>
                    <td>{{ $funcionario->nome }}</td>
                    <td>{{ $funcionario->email }}</td>
                    <td>{{ $funcionario->telefone }}</td>
                    <td>{{ $funcionario->cargo }}</td>
                    <td>{{ $funcionario->salario }}</td>
                    <td>
                        <a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" style="display:inline;">
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
