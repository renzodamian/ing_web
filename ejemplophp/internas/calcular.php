
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  <title>Factura</title>
  <meta name="description" content="Factura cursos">
  <meta name="keywords" content="taller, ecuador, loja,cursos ">
  <meta name="author" content="UTPL by @rdjaramillo1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab" rel="stylesheet" type="text/css">
  </head>
  <body>

    <?php
    extract($_POST);
    $costo_total=0;
    $costo_evento=100;
    $costo_curso=80;
    $costo_taller=10;
    $desc1=0.10;
    $desc2=0.20;
    $descuento =0;
    $num_taller=0;
    /*
    $lista_tipo[1]="Docente";
    $lista_tipo[2]="Estudiante";
    $lista_tipo[3]="Otro";

    $lista_curso[1]="JAVA";
    $lista_curso[2]="ANDROID";
    $lista_curso[3]="PHP";
    */
    //Factura

    //Costo Acumulado
    $costo_total =$costo_evento;

    //Curso
    if (isset($curso) && !empty($curso)) {
      $costo_total+= $costo_curso;
    }

    //Taller
    if (isset($taller1)) {
      $num_taller+=1;
    }
    if (isset($taller2)) {
      $num_taller+=1;
    }
    if (isset($taller3)) {
      $num_taller+=1;
    }
    $vartaller=$num_taller*$costo_taller;
    //echo "Valor talleres". $vartaller;
    $costo_total +=$vartaller;
    //echo "Valor mas curso y taller".$costo_total;


    //Descuento

    if ($tipo == 1 ) {
    //  echo "entra";
      $costo_total=$costo_total -($costo_total * $desc1);
    }elseif ($tipo == 2) {
      $costo_total=$costo_total -($costo_total * $desc2);
    }



    //astandre jamesjose7
    // Aplcicar Estilos de DEBER PROFESIONAL
     ?>

       <header>
         <h2>FACTURA</h2>
         <p>CI: <?php echo $cedula?></p>
         <p>Nombre: <?php echo $nombre ?></p>
         <p>Apellido: <?php echo $apellido ?></p>
         <p>Valor a Pagar: <?php echo $costo_total?></p>
       </header>

    

  </body>
  <footer>
    <h6>Creative Commons by @rdjaramillo1</h6>
  </footer>
</html>
