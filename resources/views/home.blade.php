@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 text-center">Bem-vindo ao Sistema de Locadora</h4>
                </div>
                <div class="card-body">
                    <p class="lead text-center">Escolha uma das opções abaixo para gerenciar o sistema:</p>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('categorias.index') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-users"></i> Gerenciar Categorias
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('clientes.index') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-users"></i> Gerenciar Clientes
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('funcionarios.index') }}" class="btn btn-secondary btn-block">
                                <i class="fas fa-user-tie"></i> Gerenciar Funcionários
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('filmes.index') }}" class="btn btn-success btn-block">
                                <i class="fas fa-film"></i> Gerenciar Filmes
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('locacoes.index') }}" class="btn btn-info btn-block">
                                <i class="fas fa-handshake"></i> Gerenciar Locações
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('pagamentos.index') }}" class="btn btn-warning btn-block">
                                <i class="fas fa-dollar-sign"></i> Gerenciar Pagamentos
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-center text-muted">
                    © 2024 Locadora de Filmes. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
