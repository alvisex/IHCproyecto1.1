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

Route::get('/', 'UserController@index')->name('index');

Route::get('/validar', 'UserController@validar')->name('validar');

Route::get('/validarqr', 'UserController@validarqr');

Route::get('/inicio', function (){
    $saludo = session()->get('saludo');
    //$id = ;
    if (!$saludo)
        return view('login');

    return view('landing-page', compact('saludo'));
});

