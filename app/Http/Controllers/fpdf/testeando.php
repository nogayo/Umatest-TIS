<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<body>

<?php
$cadena="0,/,tacto,pie,brazo,codo,/,energia,es algo autonomo,";
$cadena2="0,/,tacto,pie,brazo,codo,/,/,energia,es algo autonomo,/,";
$cadena3="/,impresora,carton,piedra,care,/,/,pera,sarten,plato,olla,/,/,sasa,azul,blanco,negro,/,";
$expo=explode(",",$cadena);
$expo2=explode(",",$cadena2);
$expo3=explode(",",$cadena3);
//echo count($expo) . "<br>";
//for($i=0; $i< count($expo); $i++){
//	echo $expo[$i] . "<br>";
 // }
   //ignorar la posicion n del arreglo
// function holamundo($nombre){
//	 echo $nombre;
 //}
 
 //holamundo('helber');
 
 function prueba($exp){
	 
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
 
 
/* $are= prueba($expo);
 echo $are[0] . "<br>";
 $contiene = $are[1];
 for($j=0; $j < count($contiene); $j++){
	 echo $contiene[$j] . "<br>";
 }
  echo $are[2] . "<br>";
   echo $are[3] . "<br>";
  */ 
  /* $are= prueba($expo2);
 echo $are[0] . "<br>";
 $contiene = $are[1];
 for($j=0; $j < count($contiene); $j++){
	 echo $contiene[$j] . "<br>";
 }
 $contiene2 = $are[2];
 for($j=0; $j < count($contiene2); $j++){
	 echo $contiene2[$j] . "<br>";
 }
 */
  $are= prueba($expo3);
  echo "tamano". count($are). "<br>";
$contiene0 = $are[0];
 for($j=0; $j < count($contiene0); $j++){
	 echo $contiene0[$j] . "<br>";
 }
 $contiene = $are[1];
 for($j=0; $j < count($contiene); $j++){
	 echo $contiene[$j] . "<br>";
 }
 $contiene2 = $are[2];
 for($j=0; $j < count($contiene2); $j++){
	 echo $contiene2[$j] . "<br>";
 }


?>
             
</body>
</html>
