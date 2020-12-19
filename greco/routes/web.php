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



//Pesquisa
Route::get('{{ public_path() }}/', function () {
    return redirect('welcome');
});

Route::get('{{ public_path() }}/welcome', function () {
    return view('welcome');
});


Route::get('{{ public_path() }}/welcome/{locale}', 'App\Http\Controllers\LocalizationController@index');

//Produtos
Route::get('{{ public_path() }}/produtos', function () {
    return view('produtos.produtos');
});


//Ficha
Route::get(/* '/ficha/{id}' */'/ficha', function () {
    return view('ficha.show');
});
Route::get(/* '/ficha/{id}/editar' */'/ficha/editar', function () {
    return view('ficha.editar');
});

//Movimentos
Route::get('{{ public_path() }}/movimentos/entrada', function () {
    return view('movimentos.entrada');
});
Route::get('{{ public_path() }}/movimentos/saida', function () {
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

//Forncedores
Route::get('/fornecedores', function () {
    return view('fornecedores.index');
});

//Armazem
Route::get('/armazem', function () {
    return view('armazem.index');
});