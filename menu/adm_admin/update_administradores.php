<?php
include("/var/www/html/conexion.php");

$nom = $_POST["nombres"];
$ape = $_POST["apellidos"];
$ced = $_POST["cedula"];
$celu = $_POST["celular"];
$corr = $_POST["email"];
$user = $_POST["usuario"];

if(isset($_POST["btnchan"]))
{

  $sql = "UPDATE ADMINISTRADORES SET adm_nombres='$nom', adm_apellidos='$ape', adm_cedula='$ced', adm_celular='$celu', adm_gmail='$corr' WHERE adm_usuario='$user'";

  if (mysqli_query($conn, $sql)) {
    echo "Los datos de usuario se han actualizado correctamente.";
  } else {
    echo "Error al actualizar los datos de usuario: " . mysqli_error($conn);
  }
}

$cedelimi = $_POST["cedulaEliminar"];
$usercreador = $_POST["usuarioEliminar"];

if(isset($_POST["btnEliminar"]))
{

  $sqli = "DELETE FROM ADMINISTRADORES WHERE adm_cedula = '$cedelimi' and adm_usuario='$usercreador'";



  if (mysqli_query($conn, $sqli)) {
    echo "Los datos de usuario se han eliminado correctamente.";
  } else {
    echo "Error al eliminar los datos: " . mysqli_error($conn);
  }
}




mysqli_close($conn);
?>
