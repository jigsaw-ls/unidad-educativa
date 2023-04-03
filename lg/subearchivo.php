<?php
//tomo el valor de un elemento de tipo texto del formulario
$cadenatexto = $_POST["cadenatexto"];
echo "Escribió en el campo de texto: " . $cadenatexto . "<br><br>";

//datos del arhivo
$nombre_archivo = $_FILES['userfile']['name'];
$tipo_archivo = $_FILES['userfile']['type'];
$tamano_archivo = $_FILES['userfile']['size'];
echo "----> *** tamaño ".$tamano_archivo;
echo "----> *** tipo ".$tipo_archivo;	
//compruebo si las características del archivo son las que deseo
//if (!((strpos($tipo_archivo, "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet") || strpos($tipo_archivo, "xlsx")|| strpos($tipo_archivo, "csv")) && ($tamano_archivo < 1000000))) {
//   	echo "La extensión o el tamaño de los archivos no es correcta. <br><br><table><tr><td><li>Se permiten archivos .xls , .xlsx y .csv <br><li>se permiten archivos de 1 Mb máximo.</td></tr></table>";
//}else{
   	if (move_uploaded_file($_FILES['userfile']['tmp_name'],  $nombre_archivo)){
      		echo "El archivo ha sido cargado correctamente.";
   	}else{
      		echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
   	}
//}

?>