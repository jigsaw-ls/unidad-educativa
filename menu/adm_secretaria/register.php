<?php

include("/var/www/html/conexion.php");


$nombre = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];
$cedula = $_POST['Cedula'];
$celular = $_POST['Celular'];
$cargo = $_POST["Cargo"];
$email = $_POST['Gmail'];
$usuario = $_POST['Usuario'];
$contrasena = $_POST['Contraseña'];
$usuarioc = $_POST['UsuarioC'];

if(isset($_POST["btnregis"]))
{
	$sql = "INSERT INTO SECRETARIA (sec_nombres, sec_apellidos, sec_cedula, sec_celular, sec_cargo,sec_gmail,sec_usuario, sec_contraseña ,adm_usuarioc) VALUES ('$nombre', '$apellidos', '$cedula', '$celular', '$cargo','$email', '$usuario', sha('$contrasena'),'$usuarioc')";
}
if (mysqli_query($conn, $sql)) {
    echo "Registro creado correctamente";
} else {
    echo "Error al crear el registro: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
