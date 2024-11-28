<?php

namespace App\Http\Controllers;

use App\Models\Pagamento;
use App\Models\Locacao;
use Illuminate\Http\Request;

class PagamentoController extends Controller
{
    public function index()
    {
        $pagamentos = Pagamento::with('locacao.cliente')->get();
        return view('pagamentos.index', compact('pagamentos'));
    }

    public function create()
    {
        $locacoes = Locacao::with('cliente')->get();
        $metodosPagamento = ['Dinheiro', 'Cartão de Crédito', 'Cartão de Débito', 'Pix'];
        return view('pagamentos.create', compact('locacoes', 'metodosPagamento'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'locacao_id' => 'required|exists:locacoes,id',
            'valor' => 'required|numeric|min:0',
            'metodo_pagamento' => 'required|string|max:255',
            'data_pagamento' => 'required|date',
        ]);

        Pagamento::create($request->all());
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento registrado com sucesso.');
    }

    public function edit(Pagamento $pagamento)
    {
        $locacoes = Locacao::with('cliente')->get();
        $metodosPagamento = ['Dinheiro', 'Cartão de Crédito', 'Cartão de Débito', 'Pix'];
        return view('pagamentos.edit', compact('pagamento', 'locacoes', 'metodosPagamento'));
    }

    public function update(Request $request, Pagamento $pagamento)
    {
        $request->validate([
            'locacao_id' => 'required|exists:locacoes,id',
            'valor' => 'required|numeric|min:0',
            'metodo_pagamento' => 'required|string|max:255',
            'data_pagamento' => 'required|date',
        ]);

        $pagamento->update($request->all());
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento atualizado com sucesso.');
    }

    public function destroy(Pagamento $pagamento)
    {
        $pagamento->delete();
        return redirect()->route('pagamentos.index')->with('success', 'Pagamento excluído com sucesso.');
    }
}
