<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\notum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class notaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $nota = notum::paginate(15);

        return view('gestor_examenes.nota.index', compact('nota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create($id_curso, $id_examen)
    {
        return view('gestor_examenes.nota.create', compact('id_curso', 'id_examen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['numero_preguntas' => 'required', 'duracion' => 'required',  'fecha_inicio' => 'required', 'fecha_fin' => 'required', ]);

    
    $contenedor_estudiantes=array();

    $estudiantes = DB::table('curso_inscritos')->where('curso_id', $request->input('curso_id'))->get();
     $index=0;
    foreach ($estudiantes as $item) {
        $contenedor_estudiantes[$index]=$item->user_id;
        $index++;
    }
    
    for ($k=0; $k < count($contenedor_estudiantes) ; $k++) { 

       DB::table('notas')->insert(['numero_preguntas' => $request->input('numero_preguntas'), 'duracion' => $request->input('duracion'), 'fecha_inicio' => $request->input('fecha_inicio'),'estado'=>true,'fecha_fin'=> $request->input('fecha_fin'), 'user_id'=> $contenedor_estudiantes[$k], 
        'examen_id'=> $request->input('examen_id')]
         );
    }

    $notas = DB::table('notas')->orderBy('id', 'desc')->take(count($contenedor_estudiantes))->get();

    $ids_notas=array();
    $j=0;
    foreach ($notas as $item) {
        
        $ids_notas[$j]=$item->id;

        $j++;        
    }
        //notum::create($request->all());
    
        Session::flash('flash_message', 'notum added!');

       // return redirect('gestor_examenes/nota');
        return $this->llenar_historial($request->input('curso_id'), $request->input('examen_id'), $ids_notas, $request->input('numero_preguntas'));
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
        $notum = notum::findOrFail($id);

        return view('gestor_examenes.nota.show', compact('notum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return void
     */
    public function edit($id)
    {
        $notum = notum::findOrFail($id);

        return view('gestor_examenes.nota.edit', compact('notum'));
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
        $this->validate($request, ['numero_preguntas' => 'required', 'duracion' => 'required', 'calificacion' => 'required', 'fecha_inicio' => 'required', 'fecha_fin' => 'required', ]);

        $notum = notum::findOrFail($id);
        $notum->update($request->all());

        Session::flash('flash_message', 'notum updated!');

        return redirect('gestor_examenes/nota');
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
        notum::destroy($id);

        Session::flash('flash_message', 'notum deleted!');

        return redirect('gestor_examenes/nota');
    }

    public function llenar_historial($id_curso, $id_examen, $ids_notas, $numero_preguntas){

        
        $preguntas= DB::table('preguntas')->where('examen_id', $id_examen)->get();
        
        $ids_preguntas=array();
      
         $index=0;
        foreach ($preguntas as $item) {
            $ids_preguntas[$index]=$item->id;
            $index++;

        }

        $primer_id= $ids_preguntas[0];

        $ultimo_id= $ids_preguntas[count($ids_preguntas)-1];

        $bandera=false;
        $ids_validos=array();
        $puntero=0;

        while(!$bandera){

               $pregunta_valida= rand($primer_id, $ultimo_id);

               $existe_id= DB::table('preguntas')->where('id',$pregunta_valida )->first();

               if($numero_preguntas==count($ids_validos)){

                $bandera=true;
               
               }else{

                 if(!is_null($existe_id)){
                  $ids_validos[$puntero]=$existe_id->id;
                  $puntero++;
                 }  

               }
           
        }
        for ($i=0; $i < count($ids_notas) ; $i++) {   

            for ($j=0; $j < count($ids_validos); $j++) {

                DB::table('historial_preguntas')->insert(['pregunta' => $ids_validos[$j], 'nota_id' => 
                    $ids_notas[$i]]);

            }

        }
         


      return redirect('gestor_examenes/'.$id_curso.'/examen_envio');
    }


}
