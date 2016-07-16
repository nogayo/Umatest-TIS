<?php

namespace App\Http\Controllers\gestor_planillas;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\enviado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;


class planillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $enviado = enviado::paginate(15);

        return view('gestor_examenes.enviado.index', compact('enviado'));
    }
    /*
    * Nro | Apellido |Nombre | Primer parcial......| NFin | RFin|

    */
     public function listar($id_curso)
    {
         
         // $planilla= DB::table('tareas')
          //  ->where('id_cursos', $id_curso)
          //  ->join('enviados', 'tareas.id', '=', 'enviados.id_tarea')
          //  ->select('tareas.nombre_tarea','tareas.descripcion','tareas.archivo','enviados.id', 'enviados.fecha_limite')
          //  ->get();

            $estudiantes= DB::table('curso_inscritos')
            ->where('curso_id', $id_curso)
            ->join('users', 'users.id', '=', 'curso_inscritos.user_id')
            ->select('users.id','users.apellido','users.name')
            ->get();

            $examenes= DB::table('examens')
            ->where('id_cursos', $id_curso)
            ->select('examens.id','examens.nombre_examen')
            ->get();
         
            $notas_estudiantes= DB::table('examens')
            ->where('id_cursos', $id_curso)
            ->join('notas', 'examens.id', '=', 'notas.examen_id')
            ->join('users', 'users.id', '=', 'notas.user_id')
            ->select('users.id','examens.id AS examen_id','examens.nombre_examen','notas.calificacion')
            ->get();
         



       //   $users = DB::table('users')
         //           ->orderBy('name', 'desc')
           //         ->groupBy('count')
             //       ->having('count', '>', 100)
            //        ->get()

        


        return view('gestor_planillas.planilla', compact('estudiantes','examenes','notas_estudiantes','id_curso'));
          //  return view('gestor_planillas.planilla', compact('examenes','id_curso'));
    }

    /**
     * este es para crear un formi=ulario de examen
     *@param  int  $id_curso es el id del curso
     *@param  int  $id es el id de la tarea a enviar
     * @return void
     */
    public function create($id_curso,$id)
    {
        return view('gestor_examenes.enviado.create',compact('id_curso','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['fecha_limite' => 'required', ]);
        $id_curso=$request->input('id_curso');
        $id_tarea=$request->input('id');

         $id_curso=$request->input('id_curso');
         DB::table('enviados')->insert(['fecha_limite' => $request->input('fecha_limite'),'id_tarea'=> $request->input('id')]
         );



         // aparir de aca es para notificaciones

         $tarea= DB::table('tareas')
           ->where('id_cursos', $id_curso)
           ->where('id', $id_tarea)
           ->select('tareas.nombre_tarea')
            ->get();
            //first();




         
          $estudiantes= DB::table('curso_inscritos')->where('curso_id', $id_curso)->get();

         foreach ($estudiantes as $item) {
            
                    DB::table('notificacions')->insert(['id_user' => $item->user_id,'id_curso' => $id_curso, 'descripcion' => $tarea[0]->nombre_tarea,'visto' => 'false']
         );

        }


        //enviado::create($request->all());

        Session::flash('flash_message', 'enviado added!');
   
        return redirect('gestor_examenes/'.$id_curso.'/envio');
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
        $enviado = enviado::findOrFail($id);

        return view('gestor_examenes.enviado.show', compact('enviado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id_curso,$id)
    {
        $enviado = enviado::findOrFail($id);

        return view('gestor_examenes.enviado.edit', compact('enviado'));
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
        $this->validate($request, ['fecha_limite' => 'required', ]);

        $enviado = enviado::findOrFail($id);
        $enviado->update($request->all());

        Session::flash('flash_message', 'enviado updated!');

        return redirect('admin/enviado');
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
        enviado::destroy($id);

        Session::flash('flash_message', 'enviado deleted!');

        return redirect('admin/enviado');
    }
       
     /**
     * Es para mostrar las tareas recibidos
     *
     * @param  int  $id_curso es el id del curso
     *
     * @return void
     */
    public function tareas_recibidos($id_curso)
    {
      $tareas= DB::table('tareas')
            ->where('id_cursos', $id_curso)
            ->join('enviados', 'tareas.id', '=', 'enviados.id_tarea')
            ->select('tareas.nombre_tarea','tareas.descripcion','tareas.archivo','enviados.id', 'enviados.fecha_limite')
            ->get();
     return view('gestor_examenes.tareasrecibidos.recibido', compact('tareas','id_curso'));
    //return redirect('admin/enviado');
    }
}
