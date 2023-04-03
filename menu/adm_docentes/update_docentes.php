<?php


include("/var/www/html/conexion.php");


$name = $_POST["nombres"];
$lastn = $_POST["apellidos"];
$idc = $_POST["cedula"];
$numce = $_POST["celular"];
$em = $_POST["email"];
$user = $_POST["usuario"];
$userc = $_POST["usuario_creador"];

if(isset($_POST["btnchan"]))
{

  $sql = "update DOCENTES set dst_nombres='$name',dst_apellidos='$lastn',dst_cedula='$idc',dst_celular='$numce',dst_gmail='$em',dst_usuario='$user' where dst_usuario='$user' and adm_usuarioc= '$userc'";


  if (mysqli_query($conn, $sql)) {
    echo "Los datos de usuario se han actualizado correctamente.";
  } else {
    echo "Error al actualizar los datos de usuario: " . mysqli_error($conn);
  }
}



$cedelimi = $_POST["cedulaEliminar"];
$usercreador = $_POST["usuarioCreadorEliminar"];

if(isset($_POST["btnEliminar"]))
{

  $sqli = "DELETE FROM DOCENTES WHERE dst_cedula = '$cedelimi' and adm_usuarioc='$usercreador'";



  if (mysqli_query($conn, $sqli)) {
    echo "Los datos de usuario se han eliminado correctamente.";
  } else {
    echo "Error al eliminar los datos: " . mysqli_error($conn);
  }
}




?>

