<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SolicitudArrendamientoRequest;
use DB;

class ArrendamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $informaciongeneral = DB::table('tbl_informaciongeneral')->first();
        $marcas = DB::table('tbl_catmarcas')->where('activo','=',1)->get();
        $videos = DB::table('tbl_catvideos')->where('activo','=',1)->get();
        return view('navbar.arrendamiento',["informaciongeneral"=>$informaciongeneral,
                                            "marcas"=>$marcas,
                                            "videos"=>$videos]);
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
    public function store(SolicitudArrendamientoRequest $request)
    {
        return $request->get('fotocopiadora');
        /*$opcion=1;
        $nombre=$request->get('nombre');
        $nombreempresa=$request->get('nombreempresa');
        if($nombreempresa == ""){
            $nombreempresa='Sin empresa';
        }
        $telefono=$request->get('telefono');
        $email=$request->get('email');
        $fotocopiadora=$request->get('fotocopiadora');
        if($fotocopiadora == "on"){
            $fotocopiadora=1;
        }else{
            $fotocopiadora=0;
        }
        $Impresora=$request->get('Impresora');
        if($Impresora == "on"){
            $Impresora=1;
        }else{
            $Impresora=0;
        }
        $volumen=$request->get('volumen');
        $mensaje=$request->get('mensaje');
        $nombre=2;
*/
        return $nombreempresa." y ".$fotocopiadora." y ".$Impresora;
        //echo "STORE";
        //return Redirect::to('/arrendamiento');
        //
        /*
        $informaciongeneral = DB::table('tbl_informaciongeneral')->first();
        $marcas = DB::table('tbl_catmarcas')->where('activo','=',1)->get();
        $videos = DB::table('tbl_catvideos')->where('activo','=',1)->get();
        return view('navbar.arrendamiento',["informaciongeneral"=>$informaciongeneral,
                                            "marcas"=>$marcas,
                                            "videos"=>$videos]);
                                            */

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
