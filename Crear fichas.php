<?php
  include("Conexion.php");
  $conexion=conexion();
 ?>

 <?php
    $numero_ficha=$_REQUEST['numero_ficha'];
    $jornada=$_REQUEST['jornada'];
    $cantidad_aprendices=$_REQUEST['cantidad_aprendices'];
    $sede=$_REQUEST['sede'];
    $fecha_inicio=$_REQUEST['fecha_inicio'];
    $fecha_fin=$_REQUEST['fecha_fin'];
    $programa=$_REQUEST['programa'];

echo"$numero_ficha--$jornada--$cantidad_aprendices--$sede--$fecha_inicio--$fecha_fin--$programa";

    $conexion=mysqli_query($conexion,"insert into crear_fichas (numero_ficha, jornada, cantidad_aprendices, sede, fecha_inicio, fecha_fin, programa)
    values($numero_ficha, '$jornada', $cantidad_aprendices, '$sede', $fecha_inicio, $fecha_fin, '$programa')")or die("Problemas en la conexion".mysqli_error());
echo "La ficha fue registrada";

    $conexion=mysqli_query($conexion,"update crear_fichas (cantidad_aprendices, sede,)
    values($cantidad_aprendices,'$sede',)")or die("Problemas en la conexion".mysqli_error());
    mysqli_close($conexion);

echo "La ficha fue editada";
?>
