<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Testeando_cadenas</title>
</head>
<body>
<?php
 $cad="holaputosbienvenidos";
 $cad1="hola putos bienvenidos";
 echo count($cad) . "<br>";
  echo count($cad1) . "<br>";
?>
<script type="text/javascript">
function startTime(){
today=new Date();
h=today.getHours();
m=today.getMinutes();
s=today.getSeconds();
m=checkTime(m);
s=checkTime(s);
document.getElementById('reloj').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);}
function checkTime(i)
{if (i<10) {i="0" + i;}return i;}
window.onload=function(){startTime();}
</script>
<div id="reloj" style="font-size:20px;"></div>

</body>
</html>
