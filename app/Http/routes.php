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

/*
 es para inscribirdea un curso(Foca pone la descripcion de  la ruta)
*/

Route::get('admin/curso/{parametro}/vista_inscribirse/{boton_todosloscursos}/materias', 'Admin\\cursoController@visualizar_inscribirse');
Route::get('admin/curso/index_todo/todo', 'Admin\\cursoController@visualizar_categoria_carrera');

Route::get('admin/curso/{id_materia}/borrar', 'Admin\\cursoController@desinscribirse');
Route::get('admin/curso/desinscribirse/borrarmostrar', 'Admin\\cursoController@visualizar_desinscribirse');

/*
 esta ruta llega de todos los cursos de los docentes, y nos llega un id de la materia
 luego se llama al controlador para mostrar todos los cotenidos de un curso . 
*/
Route::get('admin/curso_dicta/{id_curso}/vista_contenido_curso', 'Admin\\curso_dictaController@vis_contenido_curso');

Route::get('admin/curso_inscrito/{id_curso}/vista_contenido_curso', 'Admin\\curso_inscritoController@vis_contenido_curso');




  /*
 son rutas para el gestor examenes y getor cursos
*/
Route::resource('gestor_examenes/examen', 'gestor_examenes\\examenController');
Route::resource('gestor_examenes/nota', 'gestor_examenes\\notaController');
Route::resource('gestor_examenes/tarea', 'gestor_examenes\\tareaController');
Route::resource('gestor_examenes/entregado', 'gestor_examenes\\entregadoController');
Route::resource('gestor_examenes/pregunta', 'gestor_examenes\\preguntaController');
Route::resource('gestor_examenes/tipo_pregunta', 'gestor_examenes\\tipo_preguntaController');
Route::resource('gestor_examenes/multiples', 'gestor_examenes\\multiplesController');
Route::resource('gestor_examenes/desarrollo', 'gestor_examenes\\desarrolloController');
Route::resource('gestor_examenes/simple', 'gestor_examenes\\simpleController');
Route::resource('gestor_examenes/falsoverdadero', 'gestor_examenes\\falsoverdaderoController');



/*
 esta ruta llega cuando presinas crar examne en el index(+) y nos manda
 el id del curso , para luego crear un examen
*/
Route::get('gestor_examenes/examen/{id_curso}/create', 'gestor_examenes\\examenController@crear_examen');
/*
esta ruta nos llega del contenido del curso para crear nuevo examen(ojo primero lista)
gestor_examenes/'.$id_curso.'/examen
*/
Route::get('gestor_examenes/{id_curso}/examen', 'gestor_examenes\\examenController@listar');
/*
esta ruta es para modificar los datos y nos llega de editar con dos paramotres
url('/gestor_examenes/examen/' . $item->id . '/update/'.$id_curso.'/edit')
*/
Route::get('gestor_examenes/examen/{id}/update/{id_curso}/edit', 'gestor_examenes\\examenController@edit');

/*
Esta ruta lega despues de Preisnar el voton ver examen  y nos envia dos parametros]
url('/gestor_examenes/examen/'. $item->id.'/ver/'.$id_curso.'/materia')
*/
Route::get('gestor_examenes/examen/{id}/ver/{id_curso}/materia', 'gestor_examenes\\examenController@show');


/*
Esta ruta lega despues de Preisnar el voton Eliminar examen y nos envia dos parametros]
['/gestor_examenes/'.$item->id.'/examen/'.$id_curso.'/delete' ]
['/gestor_examenes/'. $item->id .'/examen/'. $id_curso .'/delete'
*/
//Route::get('gestor_examenes/{id}/examen/{id_curso}/delete', 'gestor_examenes\\examenController@destroy');
Route::get('gestor_examenes/examen/{id_curso}/delete/{id}', 'gestor_examenes\\examenController@destroy');



/*
NOTA.- Apartir de esta instruccion solo se debe aniadir rutas para tareas
*/

/*
* Esta ruta viene de listar tareas con 2 parametros
* parametro1@ id del curso
* parametro1@ tipo de evento(crear tarea/ Mis tareas)
*url('gestor_examenes/'.$id_curso.'/examen/crear/tarea') 
*url('gestor_examenes/'.$id_curso.'/examen/listar/tarea') 
*/
Route::get('gestor_examenes/{id_curso}/examen/{tipo}/tarea', 'gestor_examenes\\tareaController@listar');

/*
* esta ruta llega despues de presionar crear tarea con el id de la materia
*url('/gestor_examenes/tarea/'.$id_curso./create')
*/
//Route::get('gestor_examenes/tarea/{id_curso}/create', 'gestor_examenes\\tareaController@create');	
//url('/gestor_examenes/'.$id_curso.'/tarea/'.$tipo.'/create')
Route::get('/gestor_examenes/{id_curso}/tarea/{tipo}/create', 'gestor_examenes\\tareaController@create');	


/*
* Esta ruta viene de listar tareas con 2 parametros
* parametro1@ id del curso
* parametro1@ tipo de evento(crear tarea/ Mis tareas)
*url('/gestor_examenes/'.$id_Curso.'/materia/'.$tipo.'/tarea/' . $item->id . '/edit')

*/
Route::get('gestor_examenes/{id_curso}/materia/{tipo}/tarea/{id}/edit', 'gestor_examenes\\tareaController@edit');