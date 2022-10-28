<?php

session_start(); 
$error='Error'; 



$usuario1=$_POST['usuario'];
$contraseña1=$_POST['contraseña'];


include ("basedatos.php"); 

$contraseña1 =  md5($contraseña1);

$sql = "SELECT usuario,contraseña FROM `login` WHERE usuario = '$usuario1' and contraseña = '$contraseña1'";

$query=mysqli_query($conexion,$sql);
while ($resultado = mysqli_fetch_array($query)) {
	$usuariobd = $resultado['usuario'];
	$contrsenabd = $resultado['contraseña'];
	
	if ($usuariobd <> ""){
			if(isset($_SESSION['login_user_sys'])){
			$_SESSION['login_user_sys']=$username; 
		}
			include ("principal.php"); 
					
		} 
	else {
		echo "Usuario o contraseña no coinsiden";
	}	
}
?>