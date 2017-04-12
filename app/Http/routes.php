<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\citas;
use App\servicios;
use App\preguntas;
Route::get('/', function () {
  $servicios = servicios::all();
    return view('cosmiatria.index',compact('servicios'));
});

Route::get('servicios', function () {
  //$imagens = servicios::imagen();
  //$public_path = public_path();
  //$url = $public_path.'/storage/'.$imagens;

  $servicios = servicios::all();
  //$imagens = servicios::imagen();
  //$public_path = public_path();
  //$url = $public_path.'/storage/'.$servicios['imagen'];
   //dd($servicios);
  return view('cosmiatria/servicios',compact('servicios'));
  //  return view('cosmiatria/servicios');
});

Route::get('preguntas', function () {

  $preguntas = preguntas::all();

  return view('cosmiatria/preguntas',compact('preguntas'));
  //  return view('cosmiatria/servicios');
});

//Route::get('admin', 'AdminController@index');
Route::get('admin', 'AdminController@index');
Route::get('admin/login','AdminController@vLogin');
Route::get('admin/servicios','AdminController@vista');
Route::get('admin/nServicio','AdminController@vistaNS');
Route::post('admin/CrearServicio','AdminController@store');
Route::get('admin/pregunta','AdminController@vistaP');
Route::get('admin/nPregunta','AdminController@vistaNP');
Route::post('admin/CrearPregunta','AdminController@nuevaP');
Route::get('edit/{usu}','AdminController@edit')->where('usu','[0-9]+');
Route::post('edit/{usu}','AdminController@update');
Route::get('eliminar/{usu}','AdminController@destroy')->where('usu','[0-9]+');
Route::get('editp/{usu}','AdminController@editarp')->where('usu','[0-9]+');
Route::post('editp/{usu}','AdminController@actualiza');
Route::get('eliminarp/{usu}','AdminController@elimina')->where('usu','[0-9]+');

Route::post('CrearCita','ControllerPrincipal@store');
