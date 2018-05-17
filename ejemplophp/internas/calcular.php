<?php

extract($_POST);

$conto_evento=100;
$costo_curso=80;
$costo_taller=10;
$desc1=0.10;
$desc2=0.20;
$num_taller=0;
$var=0;
$lista_tipo[1]="Docente";
$lista_tipo[2]="Estudiante";
$lista_tipo[3]="Otro";
$lista_curso[1]="JAVA";
$lista_curso[2]="ANDROID";
$lista_curso[3]="PHP";


if (isset($taller1)) {
  $num_taller+=1;
}
if (isset($taller2)) {
  $num_taller+=1;
}
if (isset($taller3)) {
  $num_taller+=1;
}
//$vartaller=$num_taller*$costo_taller; astandre jamesjose7
// Aplcicar Estilos de DEBER PROFESIONAL
 ?>
