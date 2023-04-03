<html>
<head>
	<title>Leer Archivo Excel usando PHP</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<form action="subearchivo.php" method="post" enctype="multipart/form-data">
    <b>Campo de tipo texto:</b> 
    <br>
    <input type="text" name="cadenatexto" size="20" maxlength="100">
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <br>
    <br>
    <b>Enviar un nuevo archivo: </b>
    <br>
    <input name="userfile" type="file">
    <br>
    <input type="submit" value="Enviar">
</form>

</body>
</html>