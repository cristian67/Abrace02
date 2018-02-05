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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*Index Route funcionando ^^*/
Route::resource('/','HomeController@index', ['only'=>'index']);


/* Correo */
Route::post('enviar', 'HomeController@sendemail' );



Route::group(['prefix'=> 'admin'], function(){

    Route::resource('corredor','CorredorController');

    Route::resource('usuario','UsuarioController');

    Route::resource('contenido','PostController');

});

Route::resource('login','LogController');
Route::get('logout','LogController@logout');
