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
$usuarioc1 = $_POST['UsuarioC'];
// Construir la consulta SQL de inserción

if(isset($_POST["btnreg"]))
{
	$sql1 = "INSERT INTO DOCENTES (dst_nombres, dst_apellidos, dst_cedula, dst_celular, dst_gmail, dst_usuario, dst_contraseña,adm_usuarioc) VALUES ('$nombre', '$apellidos', '$cedula', '$celular', '$email', '$usuario', sha('$contraseña'), '$usuarioc1')";
}
// Ejecutar la consulta SQL
if (mysqli_query($conn, $sql1)) {
    echo "Registro creado correctamente";
} else {
    echo "Error al crear el registro: " . mysqli_error($conn);
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>
