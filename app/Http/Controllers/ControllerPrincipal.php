<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\citas;
use App\Hora;
use App\servicios;
class ControllerPrincipal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //$obj = Hora::findOrFail("1");
      //  $obj = DB::table('servicios')->get();
        //dd($obj);
        $hora = Hora::all();
      $servicios = servicios::all();
        //return view('cosmiatria.index',['servicio' => $servicios]);
        return view('cosmiatria.index',compact('servicios','hora'));
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

     //$datos= request()->all();
     citas::create([
       'nombre'=>$request['nombre'],
       'servicio'=>$request['servicio'],
       'mail'=>$request['mail'],
       'fecha'=>$request['date'],
       'hora'=>$request['hora'],
       'numero'=>$request['telefono'],
       'estatus'=>false,
     ]);
     return redirect()->to('/')->with('message','Solicitud enviada, confirmacion por correo');

     //dd($request);
     //return ;
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
