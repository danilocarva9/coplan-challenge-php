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

Route::get('/Index', 'Controller@getIndex')-> name("Index");

Route::get('/Cadastrar', function (){
    return view('cadastrar');
});

Route::get('/Listar', function (){
    return view('listar');
});


Route::get('/Visualizar', function (){
    return view('visualizar');
});