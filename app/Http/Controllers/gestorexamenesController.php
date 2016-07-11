<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
class gestorexamenesController extends Controller
{
    public function formulario_simple(){
      return view('gestor_examenes.vistas_examenes.simple');
    }

    public function formulario_desarrollo(){
      return view('gestor_examenes.vistas_examenes.desarrollo');
    }

    public function formulario_multiple(){

     return view('gestor_examenes.vistas_examenes.multiple');
    }

    public function formulario_falsoverdadero(){
     return view('gestor_examenes.vistas_examenes.falsoverdadero');
    }

    public function formulario_examen($id_nota, $id_examen){

      //AQUI ES DONDE VAMOS A CAMBIAR EL ESTADO DEL EXAMEN UNA VEZ QUE DE SU EXAMEN
        $examen= DB::table('examens')->where('id', $id_examen)->first();

        $nombre_examen=$examen->nombre_examen;//ESTE SE ENVIA(1)
        $fecha_examen=$examen->fecha_examen; //ESTE SE ENVIA(2)
        $id_curso=$examen->id_cursos;

        $curso= DB::table('cursos')->where('id', $id_curso)->first();
        $id_categoria=$curso->id_categoria;

        $categoria= DB::table('categorias')->where('id', $id_categoria)->first();
        $nombre_categoria=$categoria->nombre; //ESTE SE ENVIA(3)       

        $preguntas= DB::table('preguntas')->where('examen_id', $id_examen)->get();
        
        $ids_preguntas=array();
        $content_nom_preguntas=array();//ESTE SE ENVIA(4)
        $content_puntaje_preguntas=array();//ESTE SE ENVIA(5)
        $ids_tipo_pregunta=array();//ESTE SE ENVIA(6)
         $index=0;
        foreach ($preguntas as $item) {
            
            $ids_preguntas[$index]=$item->id;
            $content_nom_preguntas[$index]=$item->nombre_pregunta;
            $content_puntaje_preguntas[$index]=$item->puntaje_pregunta;
            $ids_tipo_pregunta[$index]=$item->tipo_pregunta_id;
            $index++;

        }
        
        $content_respuestas=array();//ESTE SE ENVIA(7)
        for ($i=0; $i < count($ids_preguntas) ; $i++) { 

           $respuesta_simple = DB::table('simples')->where('pregunta_id', $ids_preguntas[$i])->first();
           
           $respuesta_desarrollo = DB::table('desarrollos')->where('pregunta_id', $ids_preguntas[$i])->first();

           
           $respuesta_multiple = DB::table('multiples')->where('pregunta_id', $ids_preguntas[$i])->get();


           $respuesta_falsoverdadero = DB::table('falsoverdaderos')->where('pregunta_id', $ids_preguntas[$i])->first();

           if(!is_null($respuesta_simple)){
               $content_respuestas[$i]= $respuesta_simple->respuesta;
           }

           if(!is_null($respuesta_desarrollo)){
               $content_respuestas[$i]= $respuesta_desarrollo->respuesta;
           }

           if(!is_null($respuesta_multiple)){
               $j=0;
               $ids_multiples=array();
               foreach ($respuesta_multiple as $item) {
                $ids_multiples[$j]=$item->respuesta;
                 $j++;
               }
               $content_respuestas[$i]= $ids_multiples;
           }
           
           if(!is_null($respuesta_falsoverdadero)){
               $content_respuestas[$i]= $respuesta_falsoverdadero->respuesta;
           }

            
        }
        

      return view('gestor_examenes.vistas_examenes.formulario_examen', compact('nombre_examen', 'fecha_examen', 'nombre_categoria', 'content_nom_preguntas', 'content_puntaje_preguntas', 
        'ids_tipo_pregunta','content_respuestas'));
    }

}