<?php
include ("basedatos.php");

    $usuario = $_POST['usuario'];
    $contraseña = md5($_POST['contraseña']);
    
   $query = "INSERT INTO login (usuario,contraseña) VALUES ('$usuario','$contraseña')";
   
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