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
    $a=DB::table('tbl_productogeneral')->where('activo','=',1)->where('id','=',$id)->first();
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
Route::resource('/productostodos','productosTodosController');

Route::get('productostodosdetalle/{id}',[
    'as' => 'producto-detalle',
    'uses' => 'ProductosTodosDetalleController@Show'
]);


Route::post('cart/sendform',[
    'as' => 'cart-form',
    'uses' => 'CartController@store'
]);

Route::get('cart/show',[
'as' => 'cart-show',
'uses' => 'CartController@show'
]);

Route::get('cart/store',[
    'as' => 'cart-store',
    'uses' => 'CartController@store'
    ]);

Route::get('cart/add/{id}/{cantidad}',[
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/refresh/{id}/{cantidad}', [
    'as' => 'cart-refresh',
    'uses' => 'CartController@refresh'
]);

Route::get('cart/delete/{id}',[
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/empty/all',[
    'as' => 'cart-thrash',
    'uses' => 'CartController@vaciar'
]);
