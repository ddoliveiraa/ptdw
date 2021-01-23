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
Route::post('/produtos_q', 'App\Http\Controllers\ProdutoController@storeQuimico');
Route::post('/produtos_nq', 'App\Http\Controllers\ProdutoController@storeNaoQuimico');

//Ficha
Route::get('/ficha/{produto}', 'App\Http\Controllers\ProdutoController@show');
Route::get('/ficha/editar/{produtos}', 'App\Http\Controllers\ProdutoController@edit');
Route::get('/ficha/editar_nq/{produtos}', 'App\Http\Controllers\ProdutoController@edit_nq');
Route::put('/editar/produtos_q/{produtos}', 'App\Http\Controllers\ProdutoController@updateProdutoQ');
Route::put('/editar/produtos_nq/{produtos}', 'App\Http\Controllers\ProdutoController@updateProdutoNQ');

//Movimentos
Route::get('/movimentos/entrada', 'App\Http\Controllers\MovimentoController@showEndrada');
Route::get('/movimentos/entradaNEmbalagem','App\Http\Controllers\MovimentoController@getNEmbalagem');
Route::get('/movimentos/entradaPrateleira','App\Http\Controllers\MovimentoController@getPrateleira');
Route::get('/movimentos/saida', 'App\Http\Controllers\MovimentoController@showSaida');
Route::get('/movimentos/saida/getEmbalagensProdutos', 'App\Http\Controllers\MovimentoController@getEmbalagensProdutos');
Route::get('/movimentos/saidaSolicitantes', 'App\Http\Controllers\MovimentoController@getSolicitantes');
Route::get('/movimentos/historico', 'App\Http\Controllers\MovimentoController@index');
Route::get('/movimentos/historico/getEntradas/','App\Http\Controllers\MovimentoController@getEntradas');
Route::get('/movimentos/historico/getSaidas/','App\Http\Controllers\MovimentoController@getSaidas');
Route::get('/movimentos/show_entrada/{entrada}', 'App\Http\Controllers\MovimentoController@show');
Route::get('/movimentos/show_saida/{saida}', 'App\Http\Controllers\MovimentoController@sshow');
Route::get('/movimentos/editar/{entrada}', 'App\Http\Controllers\MovimentoController@edit');
Route::put('/movimentos/editado/{entrada}', 'App\Http\Controllers\MovimentoController@update');

Route::post('/movimentos/add/entrada_quimico', 'App\Http\Controllers\MovimentoController@storeEntradaQ');
Route::post('/movimentos/add/entrada_naoquimico', 'App\Http\Controllers\MovimentoController@storeEntradaNQ');
Route::post('/movimentos/add/saida', 'App\Http\Controllers\MovimentoController@storeSaida');

//Clientes
Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');
Route::get('/clientes/add', 'App\Http\Controllers\ClienteController@create');
Route::post('/clientes/add/store', 'App\Http\Controllers\ClienteController@store');
Route::get('/clientes/getClientes/', 'App\Http\Controllers\ClienteController@getClientes');

Route::get('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@show');

Route::get('/clientes/editar', function () {
    return view('clientes.editar');
});

//Operadores
Route::get('/operadores', 'App\Http\Controllers\OperadorController@index');
Route::get('/operadores/getOperadores/', 'App\Http\Controllers\OperadorController@getOperadores');

Route::get('/operadores/historico', function () {
    return view('operadores.historico');
});
Route::get('/operadores/getOperadoresHistorico/', 'App\Http\Controllers\OperadorController@getOperadoresHistorico');

Route::get('/operadores/add', 'App\Http\Controllers\OperadorController@add');
Route::post('/operadores/add/addOperador', 'App\Http\Controllers\OperadorController@addOperador');
Route::get('/operadores/getOperadoresShow/', 'App\Http\Controllers\OperadorController@getOperadoresShow');
Route::get('/operadores/{operador}', 'App\Http\Controllers\OperadorController@show');


// Editar
Route::get('/operadores/editar/{operador}', 'App\Http\Controllers\OperadorController@edit');
Route::put('/operadores/editar/editado/{operador}', 'App\Http\Controllers\OperadorController@updateOperador');


Route::get('/operadores/editar', function () {
    return view('operadores.editar');
});

//Fornecedores
Route::get('/fornecedores','App\Http\Controllers\FornecedorController@index');
Route::get('/fornecedores/getFornecedores/','App\Http\Controllers\FornecedorController@getFornecedores');
Route::get('/fornecedores/add', 'App\Http\Controllers\FornecedorController@create');
Route::post('/fornecedores/add/store', 'App\Http\Controllers\FornecedorController@store');
Route::get('/fornecedores/{fornecedor}', 'App\Http\Controllers\FornecedorController@show');

//Armazem
Route::get('/armazem', function () {
    return view('armazem.index');
});

//StyleGuide

Route::get('/styleguide', function () {
    return view('styleguide');
});


//para nao aparecer os erros de laravel, manda para página 404

// Route::fallback(function () {

//     return abort(404);

// });