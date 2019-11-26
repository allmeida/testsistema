<?php

use App\Produto;
use App\Categoria;

Route::get('/', function () {
    return view('index');
});

//USUARIOS
Route::get('/usuarios', 'ControladorUsuario@index');
Route::get('usuarios/novo', 'ControladorUsuario@create');
Route::post('usuarios', 'ControladorUsuario@store');
Route::get('/usuarios/apagar/{id}', 'ControladorUsuario@destroy');
Route::get('/usuarios/editar/{id}', 'ControladorUsuario@edit');
Route::post('usuarios/{id}', 'ControladorUsuario@update');

//PRODUTOS
Route::get('/produtos', 'ControladorProduto@index');
Route::get('/produtos/novo', 'ControladorProduto@create');
Route::post('/produtos', 'ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'ControladorProduto@destroy');
Route::get('/produtos/editar/{id}', 'ControladorProduto@edit');
Route::post('/produtos/{id}', 'ControladorProduto@update');

//CATEGORIAS
Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');
