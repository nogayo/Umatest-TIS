<?php

namespace App\Http\Controllers\gestor_planillas;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\enviado;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
use Auth;


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
    * Nro | Apellido |Nombre | Primer parcial......| NFin |

    */
     public function listar($id_curso)
    {

            $estudiantes= DB::table('curso_inscritos')
            ->where('curso_id', $id_curso)
            ->join('users', 'users.id', '=', 'curso_inscritos.user_id')
            ->orderBy('apellido', 'asc')
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
       


        return view('gestor_planillas.planilla', compact('estudiantes','examenes','notas_estudiantes','id_curso'));
    }

    /*
    * Este metodo es para mandar a la vista
    * todos los datos para mostrar el kardex 
    * al estudiante
    * Nro | Apellido |Materia | Primer parcial......| NFin | 
    */
    /*
     public function kardex()
    {

            $id_user=Auth::id();
            $materias= DB::table('curso_inscritos')
            ->where('user_id', $id_user)
            ->join('cursos', 'cursos.id', '=', 'curso_inscritos.curso_id')
            ->select('curso_inscritos.user_id AS id_user','cursos.id AS id_curso','cursos.nombre')
            ->get();

            $calificaciones= DB::table('examens')
            ->join('materias', 'materias.id_curso', '=', 'examens.id_cursos')
            ->select('materias.id AS id_mat','examens.id AS id_exam','examens.nombre_examen','examens.calificacion')
            ->get();
         
        $examenes= DB::table('examens')
            ->where('id_cursos', $id_curso)
            ->select('examens.id','examens.nombre_examen')
            ->get();
       


        return view('gestor_planillas.kardex', compact('materias','calificaciones','examenes'));
    }

 */


        /*
    * Este metodo es para mandar a la vista
    * todos los datos para mostrar el kardex 
    * al estudiante
    * Nro | Apellido |Materia | Primer parcial......| NFin | 
    */
     public function kardex($id_curso)
    {



            $id_user=Auth::id();
           
            $examenes= DB::table('examens')
            ->where('id_cursos', $id_curso)
            ->select('examens.id','examens.nombre_examen')
            ->get();
         
            $calificaciones= DB::table('examens')
            ->where('id_cursos', $id_curso)
            ->join('notas', 'examens.id', '=', 'notas.examen_id')
            ->where('user_id', $id_user)
            ->select('examens.id','examens.nombre_examen','notas.calificacion')
            ->get();

           



        return view('gestor_planillas.kardex', compact('examenes','calificaciones','id_curso'));
    }



}
