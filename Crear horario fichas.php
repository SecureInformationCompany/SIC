<?php
  include("Conexion.php");
  $conexion=conexion();
 ?>

 <?php
    $ficha=$_REQUEST['ficha'];
    $instructor=$_REQUEST['instructor'];
    $jornada=$_REQUEST['jornada'];
    $ambiente=$_REQUEST['ambiente'];
    $trimestre=$_REQUEST['trimestre'];
    $programa=$_REQUEST['programa'];

echo "$ficha--$instructor--$jornada--$ambiente--$trimestre--$programa";

    $conexion=mysqli_query($conexion,"insert into horario_ficha (ficha, instructor, jornada, ambiente, trimestre, programa)
    values($ficha, $instructor, $jornada, $ambiente, $trimestre, $programa)")or die("Problemas en la conexion".mysqli_error());
    mysqli_close($conexion);

echo "El horario de la ficha ".$ficha, "fue creada";
?>
