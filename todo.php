<?php

include("conexion.php");

$nombre = $_POST["usuario"];
$pass = $_POST["pass"];



if(isset($_POST["btningresar"]))
{
	$query = mysqli_query($conn,"SELECT * FROM ADMINISTRADORES WHERE adm_usuario = '$nombre' AND adm_contraseña = sha('$pass')");
	$nr = mysqli_num_rows($query);


	if($nr==1)
	{
		echo "<script> alert('Bienvenido $nombre'); window.location='/menu/menu.html' </script>";

	}else
	{
		echo "<script> alert('Usuario no Existente'); window.location='index.html' </script>";
	}
}

?>
