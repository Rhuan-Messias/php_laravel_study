<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return 'Olá';
// });

Route::get('/', 'PrincipalController@principal') -> name("site.index");
Route::get('/sobre-nos','SobreNosController@sobrenos') -> name("site.sobrenos");
Route::get('/contato','ContatoControler@contato') -> name("site.contato");
Route::get('/login', function() {return "login";}) -> name("site.login");

//app
//aba privada app
Route::prefix("/app") -> group(function(){
    Route::get('/clientes', function() {return "clientes";}) -> name("app.clientes");
    Route::get('/fornecedores','FornecedorController@index') -> name("app.fornecedores");
    Route::get('/produtos', function() {return "produtos";}) -> name("app.produtos");
}); 

Route::get('/teste/{p1}/{p2}','TesteController@teste') -> name('teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique Aqui</a> para voltar à página principal';
});