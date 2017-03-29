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

  $servicios = servicios::all();
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
