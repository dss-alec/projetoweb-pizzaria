<?php

namespace App\Http\Controllers;

use App\Models\Mensagem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MensagemController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'nome' => 'required|string|max:100',
            'email' => 'required|email|max:100',
            'telefone' => 'required|string|min:10|max:15',
            'mensagem' => 'required|string|min:10',
        ], [
            'telefone.regex' => 'O telefone deve estar no formato (99) 99999-9999.',
            'telefone.required' => 'O campo telefone é obrigatório.',
            'email.email' => 'Informe um email válido.',
        ]);

        Mensagem::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->telefone,
            'mensagem' => $request->mensagem,
        ]);

        return back()->with('success', 'Mensagem enviada com sucesso!');
    }

    //visualizacao de mensagens do admin
    public function visualizacaoMensagens()
    {
        $mensagens = Mensagem::latest()->get(); 
        return view('visualizar-mensagens', ['mensagens' => $mensagens]);
    }

}
