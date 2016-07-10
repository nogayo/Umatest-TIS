<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\tarea;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Illuminate\Support\Facades\Input;
use Hash;

class tareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $tarea = tarea::paginate(15);

        return view('gestor_examenes.tarea.index', compact('tarea'));
    }
  /**
     * si el parametro es listar entonces lista todad=s las tareas.
     * si el parametro es crear entonces lista todad=s las tareas mas la opcion de crear tareas.
     * @param  int  $id_curso ,esl el id del curso
     * @param  varchar $tipo, es la opcion de crear y listar o solo listar
     * @return void
     */
    public function listar($id_curso,$tipo)
    {
         $tarea = DB::table('tareas')->where('id_cursos', $id_curso)->get();

        //return view('gestor_examenes.examen.index',compact('examen','id_curso'));

        return view('gestor_examenes.tarea.index', compact('tarea','id_curso','tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create($id_curso,$tipo)
    {
        return view('gestor_examenes.tarea.create', compact('id_curso','tipo'));
    }

    /**
     * Store a newly created resource in storage.


//controlador
public function store(CreateInvestigationRequest $request)
    {
        $input = $request->all();
        $file = $request->file('file');
        dd($file);
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre_tarea' => 'required', 'descripcion','fecha_creacion','puntaje_total',]);
        $id_curso=$request->input('id_curso');
        $tipo=$request->input('tipo');

      if (!empty($_FILES)) {
        $temporalFile=$_FILES['archivo']['tmp_name'];
        //$path="/xampp/htdocs/git2/public/uploads/";
        $path=public_path().'/uploads/';
        $fileName=$path.'-'.Hash::make($_FILES['archivo']['name']);
        $fileType=$_FILES['archivo']['type'];
        $fileSize=($_FILES['archivo']['size']/1024);
        $nombreArchivo=$_FILES['archivo']['name'];
  
         $dir_subida = $path;
         $fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);
         if (move_uploaded_file($_FILES['archivo']['tmp_name'],$fichero_subido)) {
           DB::table('tareas')->insert(['nombre_tarea' => $request->input('nombre_tarea'), 'descripcion' => $request->input('descripcion'),
          'archivo' => $nombreArchivo,'path_archivo' => $fileName,'fecha_creacion' => $request->input('fecha_creacion'),
          'puntaje_total' => $request->input('puntaje_total'),'id_cursos'=> $request->input('id_curso')]
         );
 
         }else{

             DB::table('tareas')->insert(['nombre_tarea' => $request->input('nombre_tarea'), 'descripcion' => $request->input('descripcion'),'fecha_creacion' => $request->input('fecha_creacion'),
          'puntaje_total' => $request->input('puntaje_total'),'id_cursos'=> $request->input('id_curso')]
         );

         }
        }

        $tarea = DB::table('tareas')->where('id_cursos', $id_curso)->get();
         /*
        tarea::create($request->all());
        //$id_curso=$request->input('id_curso');
        $id_curso=$request->input('id_curso');
       $tipo=$request->input('tipo');
       */
        Session::flash('flash_message', 'tarea added!');
        return redirect('gestor_examenes/'.$id_curso.'/examen/'.$tipo.'/tarea');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function show($id)
    {
        $tarea = tarea::findOrFail($id);

        return view('gestor_examenes.tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id_curso,$tipo,$id)
    {
        $tarea = tarea::findOrFail($id);

        return view('gestor_examenes.tarea.edit', compact('tarea','id_curso','tipo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function update($id, Request $request)
    {
        $this->validate($request, ['nombre_tarea' => 'required', 'descripcion' => 'required', 'archivo' => 'required', 'estado_tarea' => 'required','puntaje_total' => 'required', ]);

        $tarea = tarea::findOrFail($id);
        $tarea->update($request->all());


        
       $id_curso=$request->input('id_curso');
       $tipo=$request->input('tipo');


        Session::flash('flash_message', 'tarea updated!');
        //return redirect('gestor_examenes/tarea');
        return redirect('gestor_examenes/'.$id_curso.'/examen/'.$tipo.'/tarea');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function destroy($id)
    {
        tarea::destroy($id);

        Session::flash('flash_message', 'tarea deleted!');

        return redirect('gestor_examenes/tarea/');
    }
    //mostrar_form

    public function createTask($id_curso,$tipo)
    {

        return view('gestor_examenes/tarea/formtarea',compact('id_curso','tipo'));
    }
     public function postUpload($id_curso,$tipo)
    {
      // if(Input::hasFile('file')) {
        //  Input::file('file')
            //   ->move('carpetarArchivos','NuevoNombre');
        //}
         //   $path = public_path();
           // $files = $request->file('file');
           // foreach($files as $file){
            //    $fileName = $file->getClientOriginalName();
            //    $file->move($path, $fileName);
           // }
       
       if (!empty($_FILES)) {
           # code...

        $temporalFile=$_FILES['archivo']['tmp_name'];
        //$path="/xampp/htdocs/git2/public/uploads/";
        $path=public_path().'/uploads/';
        //$path=base_path().'/public/uploads/';
        $fileName=$path.'-'.Hash::make($_FILES['archivo']['name']);
        $fileType=$_FILES['archivo']['type'];
        $fileSize=($_FILES['archivo']['size']/1024);
        $nombreArchivo=$_FILES['archivo']['name'];
        $file = new tarea();
        $file->nombre_tarea = $nombreArchivo;
        $file->descripcion = 'nose';
        $file->archivo = $fileName;
        $file->id_cursos = $id_curso;

        // if (move_uploaded_file($temporalFile,$path)) {
        //  $file->save();            
       // }
         $dir_subida = $path;
         $fichero_subido = $dir_subida . basename($_FILES['archivo']['name']);
         if (move_uploaded_file($_FILES['archivo']['tmp_name'],$fichero_subido)) {
            # code...
         $file->save();            
        }
      }
        $tarea = DB::table('tareas')->where('id_cursos', $id_curso)->get();

        return view('gestor_examenes.tarea.index', compact('tarea','id_curso','tipo'));
    }


}
