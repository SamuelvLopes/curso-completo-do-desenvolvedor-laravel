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
Route::get('/login',function(){ return 'login '.time();})->name('site.index');
Route::get('/clientes',function(){ return 'clientes '.time();})->name('site.cliente');
Route::get('/fornecedores',function(){ return 'fornecedores '.time();})->name('site.fornecedores');
Route::get('/produtos',function(){ return 'produtos '.time();})->name('site.produtos');
Route::get('/rota1',function(){
    echo 'rota1';
})->name('rota1');
Route::get('/rota2',function(){
    return redirect()->route('rota1');
})->name('rota2');


Route::get('/','App\Http\Controllers\PrincipalController@principal')->name('principal');
Route::get('/regexnoparam/{nome}/{teste}','App\Http\Controllers\PrincipalController@regex')->where('teste','[0-9]+')->where('nome','[A-Za-z]+')->name('site.regex');
Route::get('/sobre-nos','App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato','App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::get('/pao2/{livro}/{capitulo?}','App\Http\Controllers\PrincipalController@principalParam')->name('site.paran');
Route::get('/pao/{livro}/{capitulo}','App\Http\Controllers\PrincipalController@principalParam');
Route::get('/contato/{livro}/{Capitulo}',function(string $nome,string $capitulo){
    var_dump($nome,$capitulo);

});


Route::get('raiz', function () {
    return 'raiz';
});


Route::prefix('/app')->group(function(){

    Route::get('/clientes',function(){ return time();})->name('app.clientes');
    Route::get('/produtos',function(){ return time(); })->name('app.produtos');
    Route::get('/fornecedores',function(){ return time(); })->name('app.fornecedores');



});

Route::fallback(function(){
    echo 'errou vá em '.route('app.produtos');
});

