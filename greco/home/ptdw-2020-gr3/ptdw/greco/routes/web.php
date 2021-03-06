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


Route::get('/welcome/{locale}', 'App\Http\Controllers\LocalizationController@index');

//Produtos
Route::get('/produtos', function () {
    return view('produtos.produtos');
});
Route::get('/produtos/add', function () {
    return view('produtos.add');
});
Route::post('/produtos/q', [ProdutoController::class, 'addProdutoQ']);
Route::post('/produtos/nq', 'ProdutoController@addProdutoNQ');


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
Route::get('/movimentos/historico', function () {
    return view('movimentos.historico');
});

Route::get('/movimentos/show', function () {
    return view('movimentos.show');
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

//Forncedores
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