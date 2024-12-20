<?php

namespace App\Http\Controllers;

use App\Models\Locacao;
use App\Models\Cliente;
use App\Models\Filme;
use Illuminate\Http\Request;

class LocacaoController extends Controller
{
    public function index()
    {
        $locacoes = Locacao::with(['cliente', 'filme'])->get();
        return view('locacoes.index', compact('locacoes'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $filmes = Filme::all();
        return view('locacoes.create', compact('clientes', 'filmes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'filme_id' => 'required|exists:filmes,id',
            'data_locacao' => 'required|date',
            'data_devolucao' => 'required|date|after_or_equal:data_locacao',
        ]);

        Locacao::create($request->all());
        return redirect()->route('locacoes.index')->with('success', 'Locação cadastrada com sucesso.');
    }

    public function show($locacao)
    {
        $locacao = Locacao::findOrFail($locacao);
        return view('locacoes.show', compact('locacao'));
    }

    public function edit($locacao)
    {
        $locacao = Locacao::findOrFail($locacao); 
        $clientes = Cliente::all();
        $filmes = Filme::all();
        return view('locacoes.edit', compact('locacao', 'clientes', 'filmes'));
    }

    public function update(Request $request, $locacao)
    {
        $locacao = Locacao::findOrFail($locacao); 
        $locacao->update($request->all());
        return redirect()->route('locacoes.index')->with('success', 'Locação atualizada com sucesso.');
    }

    public function destroy(Locacao $locacao)
    {
        $locacao->delete();
        return redirect()->route('locacoes.index')->with('success', 'Locação deletada com sucesso.');
    }
}
