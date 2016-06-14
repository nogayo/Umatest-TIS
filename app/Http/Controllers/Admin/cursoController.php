<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\curso;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use DB;
class cursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $curso = curso::paginate(15);

        return view('admin.curso.index', compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        $vector=array();
        $combo_categorias = DB::table('categorias')->select('nombre')->get();
        for ($i=0; $i < count($combo_categorias) ; $i++) { 
            $vector[$i]=$combo_categorias[$i]->nombre;
        }
        //echo $a[0]->nombre;
        //echo $a[4]->nombre;

        return view('admin.curso.create', compact('vector'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nombre' => 'required', 'capacidad' => 'required', 'codigo' => 'required']);

        $espera = curso::create($request->all());

        $va = DB::table('categorias')->where('nombre', 'medicina')->first();
        $va= $va->id;
        
        $espera->id_categoria=$va;
        $espera->save();

       // roles->attachPermissions($request->input('permission_id'));

        //$id_categoria = DB::table('categorias')->where('nombre', 'tecnologia')->first();
        //$id_categoria= $id_categoria->id;
         
      //  $curso_id= DB::table('cursos')->where('codigo', $request->input('codigo'))->first();
      //  $curso_id = $curso_id->id;

       // DB::table('cursos')->insert(
       // ['id_categoria' => $id_categoria]
       // );   
        //echo $request->input('categoria');

        Session::flash('flash_message', 'curso added!');

        return redirect('admin/curso');
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
        $curso = curso::findOrFail($id);

        return view('admin.curso.show', compact('curso'));
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
        $curso = curso::findOrFail($id);

        return view('admin.curso.edit', compact('curso'));
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
        $this->validate($request, ['nombre' => 'required', 'capacidad' => 'required', 'codigo' => 'required', ]);

        $curso = curso::findOrFail($id);
        $curso->update($request->all());

        Session::flash('flash_message', 'curso updated!');

        return redirect('admin/curso');
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
        curso::destroy($id);

        Session::flash('flash_message', 'curso deleted!');

        return redirect('admin/curso');
    }
}
