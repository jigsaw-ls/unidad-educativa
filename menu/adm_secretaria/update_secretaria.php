<?php


include("/var/www/html/conexion.php");


$name = $_POST["nombres"];
$lastn = $_POST["apellidos"];
$idc = $_POST["cedula"];
$numce = $_POST["celular"];
$em = $_POST["email"];
$cg = $_POST["cargo"];
$user = $_POST["usuario"];
$userc = $_POST["usuario_creador"];

if(isset($_POST["btnchan"]))
{

  $sql = "update SECRETARIA set sec_nombres='$name',sec_apellidos='$lastn',sec_cedula='$idc',sec_celular='$numce',sec_cargo='$cg',sec_gmail='$em',sec_usuario='$user' where sec_usuario='$user' and adm_usuarioc= '$userc'";


  if (mysqli_query($conn, $sql)) {
    echo "Los datos de usuario se han actualizado correctamente.";
  } else {
    echo "Error al actualizar los datos de usuario: " . mysqli_error($conn);
  }
}

$cedelimi = $_POST["cedulaEliminar"];
$usercreador = $_POST["usuarioCredorEliminar"];

if(isset($_POST["btnEliminar"]))
{

  $sqli = "DELETE FROM SECRETARIA WHERE sec_cedula = '$cedelimi' and adm_usuarioc='$usercreador'";



  if (mysqli_query($conn, $sqli)) {
    echo "Los datos de usuario se han eliminado correctamente.";
  } else {
    echo "Error al eliminar los datos: " . mysqli_error($conn);
  }
}




?>

