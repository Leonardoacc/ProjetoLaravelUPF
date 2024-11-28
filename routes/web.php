<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\PagamentoController;


Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('home'); 
    }
    return redirect()->route('login'); 
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home'); 
    })->name('home');
    
    Route::resource('categorias', CategoriaController::class);
    Route::resource('clientes', ClienteController::class);
    Route::resource('funcionarios', FuncionarioController::class);
    Route::resource('filmes', FilmeController::class);
    Route::resource('locacoes', LocacaoController::class);
    Route::resource('pagamentos', PagamentoController::class);
    Route::get('filmes/{id}', [FilmeController::class, 'show'])->name('filmes.show');
    Route::put('/locacoes/{locacao}', [LocacaoController::class, 'update'])->name('locacoes.update');
    Route::get('/locacoes/{locacao}', [LocacaoController::class, 'show'])->name('locacoes.show');
    Route::get('/locacoes/{locacao}/edit', [LocacaoController::class, 'edit'])->name('locacoes.edit');
    Route::delete('/locacoes/{locacao}', [LocacaoController::class, 'destroy'])->name('locacoes.destroy');


    
});


require __DIR__.'/auth.php';
