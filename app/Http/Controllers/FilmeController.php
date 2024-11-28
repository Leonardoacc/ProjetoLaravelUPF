<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use App\Models\Categoria;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index()
    {
        $filmes = Filme::with('categoria')->get(); // Inclui categoria
        return view('filmes.index', compact('filmes'));
    }

    public function show(Filme $filme)
    {
        return view('filmes.show', compact('filme'));
    }

    public function create()
    {
        $categorias = Categoria::all(); // Carrega categorias
        return view('filmes.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'ano_lancamento' => 'required|integer|min:1888|max:' . date('YYYY'),
            'categoria_id' => 'required|exists:categorias,id', // Chave estrangeira
        ]);

        Filme::create($request->all());

        return redirect()->route('filmes.index')->with('success', 'Filme criado com sucesso.');
    }

    public function edit(Filme $filme)
    {
        $categorias = Categoria::all(); // Carrega categorias
        return view('filmes.edit', compact('filme', 'categorias'));
    }

    public function update(Request $request, Filme $filme)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'genero' => 'required|string|max:100',
            'ano_lancamento' => 'required|integer|min:1888|max:' . date('YYYY'),
            'categoria_id' => 'required|exists:categorias,id', // Chave estrangeira
        ]);

        $filme->update($request->all());

        return redirect()->route('filmes.index')->with('success', 'Filme atualizado com sucesso.');
    }

    public function destroy(Filme $filme)
    {
        $filme->delete();
        return redirect()->route('filmes.index')->with('success', 'Filme deletado com sucesso.');
    }
}
