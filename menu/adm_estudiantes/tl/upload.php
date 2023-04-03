<?php
include("/var/www/html/conexion.php");

if(isset($_FILES['excelFile'])){
    // Configuración de los archivos permitidos
    $allowedExtensions = array("xls", "xlsx");
    $uploadDir = "uploads/";

    // Información del archivo subido
    $fileName = $_FILES['excelFile']['name'];
    $fileSize = $_FILES['excelFile']['size'];
    $fileTmpName = $_FILES['excelFile']['tmp_name'];
    $fileType = $_FILES['excelFile']['type'];
    $fileExtension = strtolower(end(explode(".", $fileName)));

    // Verificación de la extensión del archivo
    if(in_array($fileExtension, $allowedExtensions) === false){
        die("Error: Solo se permiten archivos Excel.");
    }

    // Verificación del tamaño del archivo
    if($fileSize > 2097152){
        die("Error: El archivo debe ser menor a 2MB.");
    }

    // Ruta de almacenamiento del archivo subido
    $uploadFile = $uploadDir . $fileName;

    // Movemos el archivo subido a la carpeta de destino
    if(move_uploaded_file($fileTmpName, $uploadFile)){
        // Si se sube correctamente, leemos el archivo Excel y mostramos los resultados
        require_once 'PHPExcel-1.8/Classes/PHPExcel.php';

        $objPHPExcel = PHPExcel_IOFactory::load($uploadFile);
        $sheet = $objPHPExcel->getActiveSheet();

        // Leemos los datos de la hoja de cálculo
        $data = array();
        foreach($sheet->getRowIterator() as $row){
            $rowData = array();

            $cellIterator = $row->getCellIterator();
            $cellIterator->setIterateOnlyExistingCells(false);

            foreach($cellIterator as $cell){
                $rowData[] = $cell->getValue();
            }

            $data[] = $rowData;
        }

        // Mostramos los datos en una tabla HTML
        echo '<h2>Datos del archivo subido:</h2>';
        echo '<table>';
        echo '<tr><th>Número de cédula</th><th>Nombres</th><th>Apellidos</th><th>Curso</th></tr>';

        foreach($data as $row){
            echo '<tr>';
            echo '<td>' . $row[0] . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $_POST['curso'] . '</td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        // Si no se puede subir el archivo, mostramos un mensaje de error
        echo "Error al subir el archivo.";
    }
}

      $sql = "INSERT INTO ESTUDIANTES (est_nombres,est_apellidos,est_cedula,est_usuario,est_password) VALUES ('$row[0]','$row[1]','row[2],'$row[0]','$row[0]')";
      if (mysqli_query($conn, $sql)) {
          echo "Registro creado Correctamente";
      } else {
          echo "Error al crear el registro: " . mysqli_error($conn);

      }


      mysqli_close($conn);
?>
