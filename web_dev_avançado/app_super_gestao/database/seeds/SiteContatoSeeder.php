<?php

use Illuminate\Database\Seeder;
use App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Instanciando um objeto da classe SiteContato() que extends model
        // $contato = new SiteContato();
        // $contato-> nome = 'Sistema SG';
        // $contato-> telefone = '(11) 99999-8888';
        // $contato-> email = 'contato@sg.com.br';
        // $contato-> motivo_contato = 1;
        // $contato-> mensagem = 'Seja bem-vindo ao sistema Super Gestão'; 
        // $contato->save();      
    
        factory(SiteContato::class,100)->create();
    }
}
