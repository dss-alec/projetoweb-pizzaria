<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse; // <-- Importe o RedirectResponse

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function paginaDeCadastro():View{
        $produtos = Produto::all(); //buscando os produtos
        return view('cadastro-produtos', ['produtos' => $produtos]);
    }

    public function index(): View{
        $produtos = Produto::all();
        return view('produtos', ['produtos' => $produtos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // Esta é a view que você criou: /resources/views/admin/produtos/criar.blade.php
        return view('admin.produtos.criar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse // <-- Adicione o RedirectResponse
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
        ]);

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect()->route('admin.cadastro.produtos')->with('success', 'Produto cadastrado com sucesso!');
    }


    public function edit(Produto $produto): View // <-- Adicione o : View
    {
        // Esta é a view que você criou: /resources/views/admin/produtos/editar.blade.php
        return view('admin.produtos.editar', ['produto' => $produto]);
    }

   
    public function update(Request $request, Produto $produto): RedirectResponse // <-- Adicione o RedirectResponse
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
        ]);

        // <-- CORREÇÃO CRÍTICA:
        // Use $produto->update() (para atualizar a instância)
        // e não Produto::update() (que é um método estático)
        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect()->route('admin.cadastro.produtos')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto): RedirectResponse // <-- Adicione o RedirectResponse
    {
        $produto->delete();
        
        return redirect()->route('admin.cadastro.produtos')->with('success', 'Produto excluído com sucesso!');
    }
}