<?php

  require 'database.php';
  
  $id_producto = $_GET['id_producto'];
  
$prod = "DELETE FROM productos WHERE id_producto= '$id_producto' ";
					
$pd = $mysqli->query($prod);

?>


<html lang="en">
     <head> 
     <title>Eliminar Vuelos</title>
     <link rel="shortcut icon" href="icon.png">
     </head>
         <body>
         <div class="container">
           <div class="row">
             <div class="row" style="text-align:center">
             <?php if($pd) { ?>
                echo "<script> alert("PRODUCTO ELIMINADO"); window.location="admin.php";</script>";
             <?php } else { ?>
               echo "<script> alert("PRODUCTO NO ELIMINADO"); window.location="admin.php";</script>";
             <?php } ?>


        </body>
</html>
