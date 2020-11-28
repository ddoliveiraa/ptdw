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
    return view('produtos.index');
});
Route::get('/ficha/{id}', function () {
    return view('ficha.show');
});
Route::get('/ficha/{id}/editar', function () {
    return view('ficha.editar');
});
Route::get('/clientes', function () {
    return view('clientes.index');
});
Route::get('/operadores', function () {
    return view('operadores.index');
});
Route::get('/fornecedores', function () {
    return view('fornecedores.index');
});
Route::get('/armazem', function () {
    return view('armazem.index');
});