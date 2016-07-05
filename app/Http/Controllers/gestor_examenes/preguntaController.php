<?php

namespace App\Http\Controllers\gestor_examenes;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\preguntum;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;

class preguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $pregunta = preguntum::paginate(15);

        return view('gestor_examenes.pregunta.index', compact('pregunta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
       
         $vector = DB::table('tipo_preguntas')->lists('tipo', 'id');

        return view('gestor_examenes.pregunta.create', compact('vector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        //$this->validate($request, ['nombre_pregunta' => 'required', 'puntaje_pregunta' => 'required', ]);
        //preguntum::create($request->all());

             DB::table('preguntas')->insert(
            ['nombre_pregunta' => $request->input('nombre_pregunta'), 'puntaje_pregunta' => $request->input('puntaje_pregunta'), 'tipo_pregunta_id'=>$request->input('tipo_pregunta_id'), 
               'examen_id'=>1]
            ); 

        Session::flash('flash_message', 'preguntum added!');

        return redirect('gestor_examenes/pregunta');
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
        $preguntum = preguntum::findOrFail($id);

        return view('gestor_examenes.pregunta.show', compact('preguntum'));
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
        $preguntum = preguntum::findOrFail($id);

        return view('gestor_examenes.pregunta.edit', compact('preguntum'));
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
        $this->validate($request, ['nombre_pregunta' => 'required', 'puntaje_pregunta' => 'required', ]);

        $preguntum = preguntum::findOrFail($id);
        $preguntum->update($request->all());

        Session::flash('flash_message', 'preguntum updated!');

        return redirect('gestor_examenes/pregunta');
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
        $pregunta= DB::table('preguntas')->where('id',$id)->first();
        $pregunta=$pregunta->tipo_pregunta_id;

        $tipo= DB::table('tipo_preguntas')->where('id',$pregunta)->first();
        $tipo=$tipo->tipo;

        if($tipo=='multiple'){

          DB::table('multiples')->where('pregunta_id', $id)->delete();

        }
        if($tipo=='simple'){

          DB::table('simples')->where('pregunta_id', $id)->delete();

        }
        if($tipo=='desarrollo'){

          DB::table('desarrollos')->where('pregunta_id', $id)->delete();

        }
        if($tipo=='F/V'){

          DB::table('falsoverdaderos')->where('pregunta_id', $id)->delete();

        }

        

        preguntum::destroy($id);

        Session::flash('flash_message', 'preguntum deleted!');

        return redirect('gestor_examenes/pregunta');
    }
}
