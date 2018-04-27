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

Route::get('/', function () {
    return view('welcome');
});

//localhost/GestorLaravel/public/empresa

Route::get('/empresa', function () {
    return view('hola');
});
Route::get('/empresa/sheyshey', function () {
    return view('hola');
});

Route::get('/user','PostController@indexuser');
Route::get('/post', 'PostController@index');
Route::get('/post/nuevo','PostController@create');
Route::post('post/nuevo/crear','PostController@store');
Route::get('/post/editar/{id}','PostController@edit');
Route::post('post/editar/actualizar','PostController@update');
Route::get('/post/eliminar/{id}','PostController@destroy');


//Route::get('/api/post','PostApiController@index');
//
//
//Subir archivo rutas
//puedes tener la misma ruta con diferentes metodos
Route::get('/archivo','SubirArchivosController@index');
Route::post('/archivo', 'SubirArchivosController@subir');
Route::get('/archivo/eliminar/{file}', 'SubirArchivosController@eliminar');