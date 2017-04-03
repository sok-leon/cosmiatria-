<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\citas;
use App\servicios;
use App\preguntas;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //$citas = citas::all();
      return view('admin.layoutAdmin');
      //return 'principal';
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
        //obtenemos el archivo del formulario
         $file = $request->file('file');
        //obtenemos el nombre
         $nombre = $file->getClientOriginalName();
         //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
        servicios::create([
          'nombre'=>$request['nombre'],
          'descripcion'=>$request['descripcion'],
          'imagen' => $nombre,
        ]);
        return redirect()->to('admin/nServicio')->with('message','Servicio creado');
    }

    public function nuevaP(Request $request)
    {
        preguntas::create([
          'pregunta'=>$request['pregunta'],
          'respuesta'=>$request['respuesta'],
        ]);
        return redirect()->to('admin/nPregunta')->with('message','Pregunta creada');
    }

    public function vista()
    {
      $servicios = servicios::all();
      //return view('usuarios/principal',compact('usuarios'));
      return view('admin.servicio', compact('servicios'));
    }

    public function vistaP()
    {
      return view('admin.pregunta');
    }

    public function vistaNS()
    {
      return view('admin.nServicio');
    }

    public function vistaNP()
    {
      return view('admin.nPregunta');
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
      $servicio = servicios::find($id);
      return view('admin/edit',['servicio'=>$servicio]);
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
      $serv = servicios::find($id);
     $serv->nombre     = $request->nombre;
     $serv->descripcion    = $request->descripcion;
     $serv->imagen        =$request->file;
     $serv->save();
     Session::flash('message','Servicio Actualizado Correctamente');
     return redirect()->to('admin.servicios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      try{
         $user = servicios::findOrFail($id);
         $user->delete();
         return redirect()->to('admin/servicios')->with('message','Servicio eliminado');;
     } catch (Exception $e){
         return "Fatal error - ".$e->getMessage();
     }
    }
}
