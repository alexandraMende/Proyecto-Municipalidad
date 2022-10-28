<?php
include ("basedatos.php");

    
    $nombre = $_POST['nombre'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];
    $idproveedor = $_POST['idproveedor'];


   $query = "INSERT INTO producto (nombre,cantidad,precio,idproveedor) VALUES ('$nombre','$cantidad','$precio','$idproveedor')";
   
   if (mysqli_query($conexion,$query))
   {
       echo "se inserto correctamente";
       mysqli_close($conexion);
   }
   else
   {
       echo "no se hizo la insersion";
   }

  
?>