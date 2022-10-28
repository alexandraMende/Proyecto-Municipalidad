<?php
include ("basedatos.php");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $empresa = $_POST['empresa'];
    $nit = $_POST['nit'];
    $direccion = $_POST['direccion'];


   $query = "INSERT INTO proveedores (nombre,apellido,empresa,nit,direccion) VALUES ('$nombre','$apellido','$empresa','$nit','$direccion')";
   
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