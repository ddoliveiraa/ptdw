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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/produtos', function () {
    return view('produtos.produtos');
});
Route::get('/produtoficha', function () {
    return view('produtos.produtoficha');
});

Route::get('/clientes', function () {
    return view('clientes.clientes');
});
Route::get('/operadores', function () {
    return view('operadores.operadores');
});
Route::get('/fornecedores', function () {
    return view('fornecedores.fornecedores');
});
Route::get('/armazem', function () {
    return view('armazem.armazem');
});