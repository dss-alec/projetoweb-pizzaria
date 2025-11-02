<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse; 

class ProdutoController extends Controller
{

    public function paginaDeCadastro():View{
        $produtos = Produto::all(); //buscando os produtos
        return view('cadastro-produtos', ['produtos' => $produtos]);
    }

    public function index(): View{
        $produtos = Produto::all();
        return view('produtos', ['produtos' => $produtos]);
    }

    public function create(): View
    {
        return view('admin.produtos.criar');
    }

    public function store(Request $request): RedirectResponse 
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
            'imagem' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $path = $request->file('imagem')->store('uploads', 'public');

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imagem' => $path,
        ]);

        return redirect()->route('admin.cadastro.produtos')->with('success', 'Produto cadastrado com sucesso!');
    }


    public function edit(Produto $produto): View
    {
        return view('admin.produtos.editar', ['produto' => $produto]);
    }

   
    public function update(Request $request, Produto $produto): RedirectResponse 
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|min:0',
        ]);

        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
        ]);

        return redirect()->route('admin.cadastro.produtos')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto): RedirectResponse 
    {
        $produto->delete();
        
        return redirect()->route('admin.cadastro.produtos')->with('success', 'Produto excluído com sucesso!');
    }
}