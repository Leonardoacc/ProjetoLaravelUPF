<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\PagamentoController;

// Página inicial redireciona para login ou dashboard
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('home'); // Redireciona para a tela inicial se o usuário estiver logado
    }
    return redirect()->route('login'); // Redireciona para login se não estiver autenticado
});

// Dashboard com botões de CRUD (acessível apenas para usuários autenticados)
Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home'); // Certifique-se de que 'home.blade.php' existe
    })->name('home');
    
    Route::resource('categorias', CategoriaController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('filmes', FilmeController::class);
    Route::resource('locacoes', LocacaoController::class);
    Route::resource('pagamentos', PagamentoController::class);
    Route::get('filmes/{id}', [FilmeController::class, 'show'])->name('filmes.show');
});

// Rotas de autenticação (login, registro, etc.)
require __DIR__.'/auth.php';
