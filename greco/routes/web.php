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


/* Route::get('/', 'App\Http\Controllers\LocalizationController@index'); */
//Pesquisa
Route::get('/', function () {
    return view('welcome');
});

//Produtos
Route::get('/produtos', function () {
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
Route::get('/movimentos/entrada', function () {
    return view('movimentos.entrada');
});
Route::get('/movimentos/saida', function () {
    return view('movimentos.saida');
});
Route::get('/movimentos/historico', function () {
    return view('movimentos.historico');
});

//Clientes
Route::get('/clientes', function () {
    return view('clientes.index');
});

//Operadores
Route::get('/operadores', function () {
    return view('operadores.index');
});

//Forncedores
Route::get('/fornecedores', function () {
    return view('fornecedores.index');
});

//Armazem
Route::get('/armazem', function () {
    return view('armazem.index');
});