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

Route::get('/registro',function(){
    return view('registro');
});

Route::get('/crearNota',function(){
    return view('crearNotas');
});

Route::get('/users','userController@index');

Route::get('/notas','notasController@index');

Route::post('registrar','userController@create');

Route::post('login','userController@login');

Route::post('logout','userController@logout');

Route::post('saveNota','notasController@create');