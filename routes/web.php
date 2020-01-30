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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/API/productos/listarProductos/{orden?}/{indice?}/{numPagina?}/{cantRegistros?}', 'ProductosController@listarProductos')->name('API_Productos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/socios',  function () {
    return view('socios');
})->name('socios');
