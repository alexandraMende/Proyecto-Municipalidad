<?php

include ("basedatos.php");

    $nombre = $_POST['nombre'];

   $query = "INSERT INTO marcas (nombre) VALUES ('$nombre')";
   
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