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

Route::get('/A765', function () {
    return view('inicio');
});

Route::get('/A765/listar',"generalController@listar")->name("listar");
Route::get('/A765/estadisticas',"generalController@estadisticas")->name("estadisticas");
Route::get('/A765/registro',"generalController@vistaRegistro")->name("registrar");
Route::post('/A765/registro',"generalController@registrar")->name("registro_datos");

Route::get('/{loquesea}', function ($loquesea) {
    return view('fail');
});

