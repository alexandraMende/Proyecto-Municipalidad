<?php

    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "";
    $bd = "registro";

    $conexion = mysqli_connect($servidor,$usuario,$contraseña,$bd);
    
    if($conexion->connect_errno) {
        die("Ha ocurrido un error");
    }

?>