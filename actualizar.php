<?php

  require 'database.php';
 
  $id_product0 = $_POST['id_producto'];
  $id_categoria = $_POST['id_categoria'];
  $nombre_producto = $_POST['nombre_producto'];
  $cantidad_producto= $_POST['cantidad_producto'];
  $precio_producto= $_POST['precio_producto'];
  
 $prod="UPDATE productos SET id_categoria='$id_categoria', nombre_producto='$nombre_producto', cantidad_producto='$cantidad_producto', precio_producto'$precio_producto' WHERE id_producto='$id_producto'";

 $pd = $mysqli->query($prod);

?>


<html lang="en">
     <head> 
     <title>Producto Modificado</title>
     <link rel="shortcut icon" href="icon.png">
     </head>
         <body>
         <div class="container">
           <div class="row">
             <div class="row" style="text-align:center">
             <?php if($pd) { ?>
                echo"<script> alert("PRODUCTO ACTUALIZADO"); window.location="admin.php";</script>";
             <?php } else { ?>
               echo"<script> alert("PRODUCTO NO ACTUALIZADO"); window.location="actualizarproducto.php";</script>";
             <?php } ?>

        </body>
</html>
