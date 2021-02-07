<?php
$conexion = new mysqli('localhost', 'root', '', 'bd_proyecto');
if($conexion->connect_error){
  die("No hubo conexion");
}
?>
