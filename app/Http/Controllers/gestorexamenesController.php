<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Auth;
use Fpdf;
class gestorexamenesController extends Controller
{
   


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

        //$objetos_nota= DB::table('notas')->where('examen_id', $id_examen)->get();
  
        //sacamos todas las preguntas disponibles al usuario
        $historial= DB::table('notas')
            ->join('historial_preguntas', 'notas.id', '=', 'historial_preguntas.nota_id')
            ->select('historial_preguntas.pregunta')->where('examen_id', $id_examen)->where('user_id', Auth::id())->where('estado',1)->get();
        
        $preguntas=array();
        $index=0;
        foreach ($historial as $item) {
            $consulta= DB::table('preguntas')->where('id', $item->pregunta)->first();
           $preguntas[$index]=$consulta;
           $index++;     
        }
        
        $ids_preguntas=array();
        $content_nom_preguntas=array();//ESTE SE ENVIA(4)
        $content_puntaje_preguntas=array();//ESTE SE ENVIA(5)
        $ids_tipo_pregunta=array();//ESTE SE ENVIA(6)
        //$content_duracion=array();
         $index=0;
        foreach ($preguntas as $item) {
            
            $ids_preguntas[$index]=$item->id;
            $content_nom_preguntas[$index]=$item->nombre_pregunta;
            $content_puntaje_preguntas[$index]=$item->puntaje_pregunta;
            $ids_tipo_pregunta[$index]=$item->tipo_pregunta_id;
          //  $content_duracion[$index]=$item->duracion;
            $index++;

        }
        
        $content_respuestas=array();//ESTE SE ENVIA(7)
        $res_mul_correcta=array();
        $cadena_m="";
        for ($i=0; $i < count($ids_preguntas) ; $i++) { 

           $respuesta_simple = DB::table('simples')->where('pregunta_id', $ids_preguntas[$i])->first();
           
           $respuesta_desarrollo = DB::table('desarrollos')->where('pregunta_id', $ids_preguntas[$i])->first();

           
           $respuesta_multiple = DB::table('multiples')->where('pregunta_id', $ids_preguntas[$i])->get();

           $respuesta_multiple_correcta = DB::table('multiples')->where('pregunta_id', $ids_preguntas[$i])->where('correcta', 1)->first();

           $respuesta_falsoverdadero = DB::table('falsoverdaderos')->where('pregunta_id', $ids_preguntas[$i])->first();

           if(!is_null($respuesta_simple)){
             
               $content_respuestas[$i]=$respuesta_simple->respuesta;
               $res_mul_correcta[$i]='///';
               $cadena_m.= $respuesta_simple->respuesta . ',';
           }else{

               if(!is_null($respuesta_desarrollo)){
               $content_respuestas[$i]= $respuesta_desarrollo->respuesta;
               $res_mul_correcta[$i]='///';
                $cadena_m.= $respuesta_desarrollo->respuesta. ',';
              }else{
               if(!is_null($respuesta_falsoverdadero)){
               $content_respuestas[$i]= $respuesta_falsoverdadero->respuesta;
               $res_mul_correcta[$i]='///';
               $conversion= ($respuesta_falsoverdadero->respuesta) ? '1' : '0';
               $cadena_m.= $conversion.',';
               
              }else{
                  
               if(!is_null($respuesta_multiple)){
               $j=0;
               $ids_multiples=array();
               $cad_axu="";
               foreach ($respuesta_multiple as $item) {
                $ids_multiples[$j]=$item->respuesta;
                $cad_axu.=$item->respuesta. ',';
                 $j++;
               }
               $content_respuestas[$i]= $ids_multiples;
               $res_mul_correcta[$i]=$respuesta_multiple_correcta->respuesta;
              $cadena_m.='/,'.$cad_axu .'/,';
               }
               
                }
              }
           }

        }
       // $duracion_total=0;
        //for ($i=0; $i < count($content_duracion) ; $i++) {  
         //$duracion_total+=$content_duracion[$i];
        //}

        //una vez abierto el formulario examen el estudiante no puede volver a dar
        DB::table('notas')->where('id',$id_nota)->update(array('estado'=>0));
        

      return view('gestor_examenes.vistas_examenes.formulario_examen', compact('nombre_examen', 
        'fecha_examen', 'nombre_categoria', 'content_nom_preguntas', 'content_puntaje_preguntas', 
        'ids_tipo_pregunta','content_respuestas','cadena_m', 'res_mul_correcta', 'id_nota'));
    }
    

      public function calcular_nota(Request $request){
        
        
         $cadena_puntaje=explode(",",$request->input('con_puntaje'));//envia 1
         $cadena_res_formulario=explode(",",$request->input('con_res_formularios'));//envia 2
         $separando= explode(",",$request->input('con_res_correctas'));
         $cadena_res_correctas=$this->explode_respuestas($separando);
         $cadena_res_multiple= explode(",",$request->input('con_res_multiple'));
       
         $tipo_pre=explode(",",$request->input('tipo_pregunta'));
         $puntaje_estudiante=0;
         $numero_res_correctas=0;
         $numero_res_fallidas=0;
         $numero_res_resvisar=0;
        for ($i=0; $i < count($cadena_res_correctas); $i++) { 
                 $respuesta=$request->input($cadena_res_formulario[$i]);
                 if(count($cadena_res_correctas[$i])>1){

                 /*$multiple=$cadena_res_correctas[$i];

                   for ($j=0; $j < count($multiple); $j++) {  
                      
                      if ($respuesta== $multiple[$j]){
                          $puntaje_estudiante+=$cadena_puntaje[$i];
                          break;
                      }

                   }
                  */

                   if($respuesta==$cadena_res_multiple[$i]){
                     $puntaje_estudiante+=$cadena_puntaje[$i];
                     $numero_res_correctas++;
                   }else{
                    $numero_res_fallidas++;
                   }

                 }else{
                      if($tipo_pre[$i] != 2){
                              if($respuesta==$cadena_res_correctas[$i]){
                              $puntaje_estudiante+=$cadena_puntaje[$i];
                               $numero_res_correctas++;
                          }else{
                            $numero_res_fallidas++;
                          }
                      }else{
                        $numero_res_resvisar++;
                      }
   
                 }
           
         }
     /*    
         $respuesta="";
         for ($i=0; $i < count($cadena_res_formulario); $i++) { 
            $respuesta.=$request->input($cadena_res_formulario[$i]).'/';
         }
       */  
         $id_nota=$request->input('id_nota');

         DB::table('notas')->where('id',$id_nota)->update(array('calificacion'=>$puntaje_estudiante));
         
         $respuestas_estudiante=array();
         for ($i=0; $i < count($cadena_res_formulario); $i++) {  
           $respuestas_estudiante[$i]= $request->input($cadena_res_formulario[$i]);
         }

         //LO QUE SE ENVIA
         $puntajes= $request->input('con_puntaje');//explode
         //$respuestas_estudiante= $request->input('con_res_formularios');//explode
         $preguntas_examen= $request->input('nombre_pregunta_examen');//explode
         $nombre_examen= $request->input('nombre_examen');
         $fecha_examen=$request->input('fecha_examen');
         $nombre_categoria=$request->input('nombre_categoria');
         $puntaje_total_examen=$request->input('puntaje_total_examen');
         $tipos_pregunta=$request->input('tipo_pregunta');//eplode

         $this->crear_pdf($puntajes, $respuestas_estudiante, $preguntas_examen, $nombre_examen, $fecha_examen, $nombre_categoria, $puntaje_total_examen, $tipos_pregunta, $id_nota);

         return view('gestor_examenes.vistas_examenes.resultado_examen', compact('puntaje_estudiante','numero_res_correctas','numero_res_fallidas', 'numero_res_resvisar'));
      }
     
      

      public function explode_respuestas($exp){
         
         
       $vector_oficial=array();
        $puntero_oficial=0;
        $ultimo=count($exp);
        for($i=0; $i< count($exp); $i++){
           
        
                if($exp[$i]=='/'){
                 
                   $x=($i+1);
                   $vector_multiple=array();
                   $puntero_multiple=0;
                  while($exp[$x]!='/'){
                      $vector_multiple[$puntero_multiple]=$exp[$x];
                       $puntero_multiple++;
                       $x++;        
                       }
                  //posiblemente incrementar $x;
                  $vector_oficial[$puntero_oficial]=$vector_multiple;
                  $puntero_oficial++;
                  $i=$x;
                  
                 }else{
                    $vector_oficial[$puntero_oficial]=$exp[$i];
                  $puntero_oficial++;
                 }
                 
                 if($ultimo==($i+2)){
                  
                   break;
                  }
          
            }
        
              return $vector_oficial;
             }

       public function crear_pdf($puntajes, $respuestas_estudiante, $preguntas_examen, 
        $nombre_examen, $fecha_examen, $nombre_categoria, $puntaje_total_examen, $tipos_pregunta, $id_nota){
         
         $fecha_actual = date("Y-m-d H-i-s");
         $puntaje=explode(",",$puntajes);
         //$respuestas=explode(",", $respuestas_estudiante);
         $preguntas=explode(",", $preguntas_examen);
         $tipo=explode(",", $tipos_pregunta);

         Fpdf::AddPage();
         Fpdf::SetFont('Arial','B',16);

         Fpdf::Cell(185,10, $nombre_examen,0,2,'C');
         Fpdf::Cell(185,10, $fecha_examen,0,2,'C');
         Fpdf::Cell(185,10, $nombre_categoria,0,2,'C');
         Fpdf::Cell(185,10, $puntaje_total_examen.' Puntos',0,2,'C');

        for($i=0;$i<count($puntaje);$i++){
          Fpdf::Cell(0,10,($i+1).'.- '.$preguntas[$i].'('.$puntaje[$i].'puntos)',0,2);

          if($tipo[$i] == '4'){
               if ($respuestas_estudiante[$i]=='1') {
                Fpdf::Cell(0,10,'Respuesta'.'.- '.'Verdadero',0,2);
               }else{
                Fpdf::Cell(0,10,'Respuesta'.'.- '.'Falso',0,2);
               }
          }else{

            Fpdf::Cell(0,10,'Respuesta'.'.- '.$respuestas_estudiante[$i],0,2);
          }
          
          
        }
          //Fpdf::Output();
        $archivo_examen= 'pdfs_examenes/'.$nombre_examen.'-'.$fecha_actual.'.pdf';
        Fpdf::Output($archivo_examen,'F');
         //Fpdf::Output('probamela3.pdf', 'F');
         
         DB::table('notas')->where('id',$id_nota)->update(array('archivo'=>$archivo_examen));
         
       }
    }