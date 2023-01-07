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
Route::get('/login',function(){ return 'login '.time();});
Route::get('/clientes',function(){ return 'clientes '.time();});
Route::get('/fornecedores',function(){ return 'fornecedores '.time();});
Route::get('/produtos',function(){ return 'produtos '.time();});



Route::get('/','App\Http\Controllers\PrincipalController@principal');
Route::get('/regexnoparam/{nome}/{teste}','App\Http\Controllers\PrincipalController@regex')->where('teste','[0-9]+')->where('nome','[A-Za-z]+');
Route::get('/sobre-nos','App\Http\Controllers\SobreNosController@sobreNos');
Route::get('/contato','App\Http\Controllers\ContatoController@contato');
Route::get('/pao2/{livro}/{capitulo?}','App\Http\Controllers\PrincipalController@principalParam');
Route::get('/pao/{livro}/{capitulo}','App\Http\Controllers\PrincipalController@principalParam');
Route::get('/contato/{livro}/{Capitulo}',function(string $nome,string $capitulo){
    var_dump($nome,$capitulo);

});


Route::get('raiz', function () {
    return 'raiz';
});




