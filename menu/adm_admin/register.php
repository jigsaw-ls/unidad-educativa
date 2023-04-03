<?php

include("/var/www/html/conexion.php");


// Recuperar los valores del formulario
$nombre = $_POST['Nombres'];
$apellidos = $_POST['Apellidos'];
$cedula = $_POST['Cedula'];
$celular = $_POST['Celular'];
$email = $_POST['Gmail'];
$usuario = $_POST['Usuario'];
$contraseña = $_POST['Contraseña'];

// Construir la consulta SQL de inserción

if(isset($_POST["btnregis"]))
{
	$sql = "INSERT INTO ADMINISTRADORES (adm_nombres, adm_apellidos, adm_cedula, adm_celular, adm_gmail, adm_usuario, adm_contraseña) VALUES ('$nombre', '$apellidos', '$cedula', '$celular', '$email', '$usuario', sha('$contraseña'))";
}
// Ejecutar la consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Registro creado correctamente";
} else {
    echo "Error al crear el registro: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
