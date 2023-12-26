<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $fillable = ['nome','telefone','motivo_contato','email','mensagem']; 
}
