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
use App\promocion;

use Illuminate\Mail\Message;

Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);
Route::get('/', ['as ' => 'gmaps', 'uses' =>  'ControllerPrincipal@index']);
  //$servicios = servicios::all();
    //return view('cosmiatria.index',compact('servicios'));
//});
Route::get('citaConfirmar/{cita}','AdminController@confirmarcion');
Route::get('eliminarCita/{cita}','AdminController@eliminarCita')->where('cita','[0-9]+');
Route::get('actualizarCita/{cita}','AdminController@actualizarCita')->where('cita','[0-9]+');
Route::post('actualizarCita/{cita}','AdminController@actualizarCitaPost');


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

Route::get('admin/promocion', 'AdminController@vistapromocion');

//Route::get('admin', 'AdminController@index');
Route::get('admin', 'AdminController@index');
Route::get('login', function (){
  return view('admin/app');
});
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

Route::get('editprom/{usu}','AdminController@editpromo')->where('usu','[0-9]+');
Route::post('editprom/{usu}','AdminController@actpromo');

Route::post('/CrearCita','ControllerPrincipal@store');


Route::get('email', function () { //funcion de prueba de envio de correo

  Mail::send('emails.confirmacion',['name'=> 'sok'], function (Message $message){
    $message ->to('theonesok@gmail.com','larave')
        ->from('laravelsokdesa@gmail.com','Styed');
  });

});



// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);
