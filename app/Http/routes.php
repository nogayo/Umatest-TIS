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

//Route::get('/', function () {
 // return view('welcome');
//});

Route::resource('admin/posts', 'Admin\\PostsController');
//Route::get('/','Admin\\PostsController@prueba');
Route::get('/','principalPanel@index');
Route::get('/administrador','principalPanel@administrador');
Route::get('/docentes','principalPanel@docentes');
Route::get('/estudiantes','principalPanel@estudiantes');
Route::get('/ayuda','principalPanel@ayuda');

Route::resource('admin/permisos', 'Admin\\permisosController');
Route::resource('admin/roles', 'Admin\\rolesController');
Route::resource('admin/users', 'Admin\\UsersController');
Route::resource('admin/users', 'Admin\\UsersController');