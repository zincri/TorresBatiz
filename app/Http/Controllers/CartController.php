<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart',array());

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $informaciongeneral = DB::table('tbl_informaciongeneral')->first();
        $marcas = DB::table('tbl_catmarcas')->where('activo','=',1)->get();
        $videos = DB::table('tbl_catvideos')->where('activo','=',1)->get();
        return view('navbar.cart',["informaciongeneral"=>$informaciongeneral,
                                            "marcas"=>$marcas,
                                            "videos"=>$videos]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function add($id, $cantidad)
    {
        
        $flag=false;
        $a=DB::table('tbl_productogeneral')->where('activo','=',1)->where('id','=',$id)->first();
        
        $cart=\Session::get('cart');
        
        $entid=(int)$id;
        foreach($cart as $item){
            $entero=(int)$item->id;
            if($entero == $entid) {
                $flag=true;
                break;
            }
        }
        if($flag==true){
            $cantidadnueva=(int)$cart[$id]->cantidad;
            $cantidadA=(int)$cantidad;
            $cantidadnueva=$cantidadnueva+$cantidadA;
            $cart[$id]->cantidad=$cantidadnueva;
        }
        else {
            $a->cantidad=$cantidad;
            $cart[$id]=$a;
            \Session::put('cart',$cart);
        }
        
        return redirect()->route('producto-detalle',['producto' => $id]);
        
    }

    public function delete($id)
    {
        
        $cart=\Session::get('cart');
        unset($cart[$id]);
        \Session::put('cart',$cart);
        return redirect()->route('cart-show');
        
    }

    public function vaciar()
    {
        
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
