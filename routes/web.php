<?php

use App\Produto;
use App\Categoria;

Route::get('/', function () {
    return view('index');
});

//rotas para produtos
Route::get('/produtos', 'ControladorProduto@index');
Route::get('/produtos/novo', 'ControladorProduto@create');
Route::post('/produtos', 'ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'ControladorProduto@destroy');
Route::get('/produtos/editar/{id}', 'ControladorProduto@edit');
Route::post('/produtos/{id}', 'ControladorProduto@update');
