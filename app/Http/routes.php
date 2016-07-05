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
Route::get('/','menuPrincipalController@index');
// es pararte cuando esta logueado
Route::get('/resenia_historica','menuPrincipalController@reseniaHistorica');
Route::get('/mision','menuPrincipalController@mision');
Route::get('/vision','menuPrincipalController@vision');
Route::get('/contactos','menuPrincipalController@contactos');
Route::get('/ayuda','menuPrincipalController@ayuda');

Route::get('/resenia_historica_v','menuPrincipalControllerB@reseniaHistorica');
Route::get('/mision_v','menuPrincipalControllerB@mision');
Route::get('/vision_v','menuPrincipalControllerB@vision');
Route::get('/contactos_v','menuPrincipalControllerB@contactos');
Route::get('/ayuda_v','menuPrincipalControllerB@ayuda');

Route::resource('admin/permisos', 'Admin\\permisosController');
Route::resource('admin/roles', 'Admin\\rolesController');
Route::resource('admin/users', 'Admin\\UsersController');
Route::resource('admin/docente', 'Admin\\docenteController');
Route::resource('admin/administrador', 'Admin\\administradorController');
Route::resource('admin/curso', 'Admin\\cursoController');
Route::resource('admin/categoria', 'Admin\\categoriaController');
Route::resource('admin/curso_dicta', 'Admin\\curso_dictaController');
Route::resource('admin/curso_inscrito', 'Admin\\curso_inscritoController');


Route::resource('/todosloscursos/{boton}/carrera', 'gestorusuarioController');
//Route::get('/todosloscursos/{algo}','gestorusuarioController@ellasefue']);

//Route::get('/admin/curso/{parametro}', 'Admin\\cursoController@visualizar');

Route::get('admin/curso/{parametro}/vista_inscribirse/{boton_todosloscursos}/materias', 'Admin\\cursoController@visualizar_inscribirse');
Route::get('admin/curso/index_todo/todo', 'Admin\\cursoController@visualizar_categoria_carrera');

Route::get('admin/curso/{id_materia}/borrar', 'Admin\\cursoController@desinscribirse');
Route::get('admin/curso/desinscribirse/borrarmostrar', 'Admin\\cursoController@visualizar_desinscribirse');
Route::get('admin/curso_dicta/{id_curso}/vista_contenido_curso', 'Admin\\curso_dictaController@vis_contenido_curso');

Route::get('admin/curso_inscrito/{id_curso}/vista_contenido_curso', 'Admin\\curso_inscritoController@vis_contenido_curso');

Route::resource('gestor_examenes/examen', 'gestor_examenes\\examenController');
Route::resource('gestor_examenes/nota', 'gestor_examenes\\notaController');
Route::resource('gestor_examenes/tarea', 'gestor_examenes\\tareaController');
Route::resource('gestor_examenes/entregado', 'gestor_examenes\\entregadoController');
Route::resource('gestor_examenes/pregunta', 'gestor_examenes\\preguntaController');
Route::resource('gestor_examenes/tipo_pregunta', 'gestor_examenes\\tipo_preguntaController');

Route::resource('gestor_examenes/multiples', 'gestor_examenes\\multiplesController');
Route::get('gestor_examenes/multiples/{id_pregunta}/create', 'gestor_examenes\\multiplesController@create');

Route::resource('gestor_examenes/desarrollo', 'gestor_examenes\\desarrolloController');
Route::get('gestor_examenes/desarrollo/{id_pregunta}/create', 'gestor_examenes\\desarrolloController@create');

Route::resource('gestor_examenes/simple', 'gestor_examenes\\simpleController');
Route::get('gestor_examenes/simple/{id_pregunta}/create', 'gestor_examenes\\simpleController@create');

Route::resource('gestor_examenes/falsoverdadero', 'gestor_examenes\\falsoverdaderoController');
Route::get('gestor_examenes/falsoverdadero/{id_pregunta}/create', 'gestor_examenes\\falsoverdaderoController@create');