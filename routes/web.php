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

Route::get('/','InicioController@Index');
Route::get('/nosotros','NosotrosController@Index');
Route::get('/productos','ProductosController@Index');
Route::get('/noticias','NoticiasController@Index');
Route::get('/arrendamiento','ArrendamientoController@Index');
Route::get('/soporte','SoporteController@Index');
Route::get('/consumibles','ConsumiblesController@Index');
Route::get('/sucursales','SucursalesController@Index');
Route::get('/contacto','ContactoController@Index');






