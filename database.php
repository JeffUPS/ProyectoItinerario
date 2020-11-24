<?php
$mysqli = new mysqli('localhost', 'root', '', 'DB-Proyecto');

if(mysqli_connect_errno()){
  echo 'Conexion Fallida : ', mysqli_connect_error();
  exit();
}

?>
