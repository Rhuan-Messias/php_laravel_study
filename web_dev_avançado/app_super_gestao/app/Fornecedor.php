<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $table = 'fornecedores'; //protected are private attributes
    
    //abaixo nós autorizamos com o método protected $fillable que o método
    //create através de um array associativo passe os parâmetros como métodos
    //do próprio objeto model, para que possam ser persistidos 
    protected $fillable = ['nome','site','uf','email']; 
}
