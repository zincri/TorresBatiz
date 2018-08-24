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
Route::get('product/{id}', function($id){
    //return DB::table('tbl_productogeneral')->where('activo','=',1)->where('id','=',$id)->first();
    $a=DB::table('tbl_productogeneral')->where('activo','=',1)->where('id','=',$id)->first();
    //dd($a);
    return redirect()->route('cart-add',$a);
});

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

Route::get('productostodosdetalle/{id}',[
    'as' => 'producto-detalle',
    'uses' => 'ProductosTodosDetalleController@Show'
]);

Route::get('cart/show',[
'as' => 'cart-show',
'uses' => 'CartController@Show'
]);

Route::get('cart/add/{id}',[
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);