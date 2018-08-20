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
/*VISTAS*/
Route::resource('/','InicioController');
Route::resource('/nosotros','NosotrosController');
Route::resource('/productos','ProductosController');
Route::resource('/noticias','NoticiasController');
Route::resource('/arrendamiento','ArrendamientoController');
Route::resource('/soporte','SoporteController');
Route::resource('/consumibles','ConsumiblesController');
Route::resource('/sucursales','SucursalesController');
Route::resource('/contacto','ContactoController');
Route::resource('/cart','CartController');
Route::resource('/productostodos','productosTodosController');
Route::resource('/productostodosdetalle{id}','ProductosTodosDetalleController');

/*FORMULARIOS*/

