<?php

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
Route::get('/contato', function () {
    return view('contato');
});
Route::get('/categoria', function () {
    return view('categoria');
});
Route::get('/pedido', function () {
    return view('pedido');
});
Route::get('/cliente', function () {
    return view('cliente');
});
Route::get('/produto', function () {
    return view('produto');
});
Route::get('/produto-consulta', function () {
    return view('produto-consulta');
});

Route::get('/cliente','ClienteController@index');
Route::get('/categoria','CategoriaController@index');
Route::get('/pedido','PedidoController@index');

Route::post('/cliente/inserir','ClienteController@store');
Route::post('/categoria/inserir','CategoriaController@store');

Route::post('/pedido/inserir','PedidoController@store');
Route::get('/cliente/{id}','ClienteController@destroy');
Route::get('/categoria/{id}','CategoriaController@destroy');

Route::get('/pedido/{id}','PedidoController@destroy');

// Funções Produto
Route::get('/produto','ProdutoController@consultaAll');
Route::post('/produto/inserir','ProdutoController@store');
Route::get('/produto/{id}','ProdutoController@destroy');
Route::get('/produto-editar/{id}/editar','ProdutoController@edit');
Route::get('/produto-alterar/{id}','ProdutoController@update');
