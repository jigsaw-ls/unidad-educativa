<?php
$allowedExtensions = array("xls", "xlsx");
$uploadDir = "uploads/";

$fileName = $_FILES['excelFile']['name'];
$fileSize = $_FILES['excelFile']['size'];
$fileTmpName = $_FILES['excelFile']['tmp_name'];
$fileType = $_FILES['excelFile']['type'];
$fileExtension = strtolower(end(explode(".", $fileName)));

if(in_array($fileExtension, $allowedExtensions) === false){
    die("Error: Solo se permiten archivos Excel.");
}

if($fileSize > 2097152){
    die("Error: El archivo debe ser menor a 2MB.");
}

$uploadFile = $uploadDir . $fileName;

if(move_uploaded_file($fileTmpName, $uploadFile)){
    echo "El archivo se ha subido exitosamente.";
} else {
    echo "Error al subir el archivo.";
}
?>
