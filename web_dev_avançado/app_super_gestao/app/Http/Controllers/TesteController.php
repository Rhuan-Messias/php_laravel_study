<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1,int $p2) {
        echo "a soma de $p1 + $p2 é: ".($p1 + $p2);
        return view('site.teste')->with('p1',$p1)->with('p2',$p2)   ; 
    }
}
/*
usamos a view() e chamamos o método -> with(), que recebe dois parâmetros
o primeiro parâmetro é o nome da variável do lado da view, e o segundo
é o nome da variável aqui. 
*/
