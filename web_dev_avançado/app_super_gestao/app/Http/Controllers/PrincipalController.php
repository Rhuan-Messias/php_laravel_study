<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal() {

        $motivo_contatos= MotivoContato::all(); //pegar todos os registros de motivo_contatos e enviar para essa variável
        

        return view('site.principal',['motivo_contatos'=>$motivo_contatos]);
    }
}
