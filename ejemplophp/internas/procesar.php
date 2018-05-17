<?php
echo "string aqui entra";
extract($_POST);

$fecha_actual="10-05-2018";

  $tiempo=strtotime($fecha_nacimiento);
  $ahora=time();
  $edad =($ahora-$tiempo)/(60*60*24*365.25);
  echo $edad =floor ($edad);





echo "Primer ejemplo de php <br> Bienevenido ".$nombre. " " .$apellido;

print" <br>UD tiene :".$edad ." anos de edad";


if ($edad >=18){
  echo "Es mayor de edad";

}else {
  echo "Es menor de edad";
}

//For
for ($i=0; $i < 12; $i++) {
  print"Es un msj incrementable".$i."<br>";
}
//Listas

$lista1[0]="Docente";
$lista1[1]="Estudiante";
$lista1[2]="Ingenierio";
$lista1[3]="Doctor";
$lista1[4]="Alcalde";
$lista1[5]="Policia";
$lista1[5]="Militar";

//count($lista1) las listas cuando no sabemos un numero exacto de elemento de la lista
for ($i=0; $i < count($lista1); $i++) {
  print "Listas".$i." ".$lista1[$i]."<br>";
}
 ?>
