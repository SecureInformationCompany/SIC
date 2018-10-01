<?php
function conexion(){
  $conexion=mysqli_connect("localhost","root","")or die("Error en la conexion");
  mysqli_select_db($conexion,"proyecto")or die("Error en la conexion");
  return $conexion;
}
?>
