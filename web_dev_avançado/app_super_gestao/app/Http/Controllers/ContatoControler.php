<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoControler extends Controller
{
    public function contato(Request $request) {
     
        $motivo_contatos= MotivoContato::all();
        return view("site.contato",["titulo"=>'Contato','motivo_contatos'=>$motivo_contatos]);
    }

    public function salvar(Request $request) {
        
        //realizar a validação dos dados do formulário recebidos em request
        $request->validate([
            'nome' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        //SiteContato::create($request->all());
    }
}
