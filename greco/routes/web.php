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
Route::get('/produtos/getProdutos/','App\Http\Controllers\ProdutoController@getProdutos')->name('produtos.getProdutos');
Route::get('/produtos/add', 'App\Http\Controllers\ProdutoController@add');

Route::post('/produtos_q', 'App\Http\Controllers\ProdutoController@addProdutoQ');
Route::post('/produtos_nq', 'App\Http\Controllers\ProdutoController@addProdutoNQ');


//Ficha
Route::get(/* '/ficha/{id}' */'/ficha', function () {
    return view('ficha.show');
});
Route::get(/* '/ficha/{id}/editar' */'/ficha/editar', function () {
    return view('ficha.editar');
});

//Movimentos
Route::get('/movimentos/entrada', function () {
    return view('movimentos.entrada');
});
Route::get('/movimentos/saida', function () {
    return view('movimentos.saida');
});
Route::get('/movimentos/historico', 'App\Http\Controllers\MovimentoController@index');
Route::get('/movimentos/historico/getEntradas/','App\Http\Controllers\MovimentoController@getEntradas');
Route::get('/movimentos/historico/getSaidas/','App\Http\Controllers\MovimentoController@getSaidas');

Route::get('/movimentos/show_entrada', function () {
    return view('movimentos.show_entrada');
});

Route::get('/movimentos/show_saida', function () {
    return view('movimentos.show_saida');
});

Route::get('/movimentos/editar', function () {
    return view('movimentos.editar');
});


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

Route::get('/operadores/add', function () {
    return view('operadores.add');
});

Route::get('/operadores/show', function () {
    return view('operadores.show');
});

Route::get('/operadores/editar', function () {
    return view('operadores.editar');
});

//Fornecedores
Route::get('/fornecedores', function () {
    return view('fornecedores.index');
});
Route::get('/fornecedores/add', function () {
    return view('fornecedores.add');
});

//Armazem
Route::get('/armazem', function () {
    return view('armazem.index');
});

//StyleGuide

Route::get('/styleguide', function () {
    return view('styleguide');
});