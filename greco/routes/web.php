<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

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

//Pesquisa
Route::get('/', function () {
    return redirect('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/search','App\Http\Controllers\SearchController@search');


Route::get('/welcome/{locale}', 'App\Http\Controllers\LocalizationController@index');

//Produtos
Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index');
Route::get('/produtos/getProdutos/','App\Http\Controllers\ProdutoController@getProdutos');
Route::get('/produtos/add', 'App\Http\Controllers\ProdutoController@add');
Route::get('/ficha/{produto}', 'App\Http\Controllers\ProdutoController@show');

Route::post('/produtos_q', 'App\Http\Controllers\ProdutoController@addProdutoQ');
Route::post('/produtos_nq', 'App\Http\Controllers\ProdutoController@addProdutoNQ');

//Ficha

Route::get('/ficha/editar/{produtos}', 'App\Http\Controllers\ProdutoController@edit');
Route::post('/editar/produtos_q', 'App\Http\Controllers\ProdutoController@updateProdutoQ');
Route::post('/editar/produtos_nq', 'App\Http\Controllers\ProdutoController@updateProdutoNQ');
//Movimentos
Route::get('/movimentos/entrada', 'App\Http\Controllers\MovimentoController@showEndrada');
Route::get('/movimentos/entradaNEmbalagem','App\Http\Controllers\MovimentoController@getNEmbalagem');
Route::get('/movimentos/entradaPrateleira','App\Http\Controllers\MovimentoController@getPrateleira');
Route::get('/movimentos/saida', 'App\Http\Controllers\MovimentoController@showSaida');
Route::get('/movimentos/saidaEmbalagensProdutos', 'App\Http\Controllers\MovimentoController@getEmbalagensProdutos');
Route::get('/movimentos/saidaSolicitantes', 'App\Http\Controllers\MovimentoController@getSolicitantes');

Route::get('/movimentos/historico', 'App\Http\Controllers\MovimentoController@index');
Route::get('/movimentos/historico/getEntradas/','App\Http\Controllers\MovimentoController@getEntradas');
Route::get('/movimentos/historico/getSaidas/','App\Http\Controllers\MovimentoController@getSaidas');
Route::get('/movimentos/show_entrada/{entrada}', 'App\Http\Controllers\MovimentoController@show');
Route::get('/movimentos/show_saida/{saida}', 'App\Http\Controllers\MovimentoController@sshow');

Route::get('/movimentos/editar', function () {
    return view('movimentos.editar');
});

Route::post('/movimentos/add/entrada_quimico', 'App\Http\Controllers\MovimentoController@addMovimentoEntradaQ');
Route::post('/movimentos/add/entrada_naoquimico', 'App\Http\Controllers\MovimentoController@addMovimentoEntradaNQ');
Route::post('/movimentos/add/saida', 'App\Http\Controllers\MovimentoController@addMovimentoSaida');

//Clientes
Route::get('/clientes', function () {
    return view('clientes.index');
});
Route::get('/clientes/show', function () {
    return view('clientes.show');
});

Route::get('/clientes/add', function () {
    return view('clientes.add');
});

Route::get('/clientes/editar', function () {
    return view('clientes.editar');
});

//Operadores
Route::get('/operadores', function () {
    return view('operadores.index');
});

Route::get('/operadores/historico', function () {
    return view('operadores.historico');
});

Route::get('/operadores/add', 'App\Http\Controllers\OperadorController@show');
Route::post('/operadores/add/addOperador', 'App\Http\Controllers\OperadorController@addOperador');

Route::get('/operadores/show', function () {
    return view('operadores.show');
});

Route::get('/operadores/editar', function () {
    return view('operadores.editar');
});

//Fornecedores
Route::get('/fornecedores','App\Http\Controllers\FornecedorController@index');
Route::get('/fornecedores/getFornecedores/','App\Http\Controllers\FornecedorController@getFornecedores');
Route::get('/fornecedores/add', function () {
    return view('fornecedores.add');
});
Route::post('/fornecedores/add/store', 'App\Http\Controllers\FornecedorController@store');

//Armazem
Route::get('/armazem', function () {
    return view('armazem.index');
});

//StyleGuide

Route::get('/styleguide', function () {
    return view('styleguide');
});