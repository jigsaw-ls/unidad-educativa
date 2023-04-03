<!DOCTYPE html>
<html>
<head>
	<title>Registro Administradores</title>
	<style>
		table {
			border-collapse: collapse;
			width: 80%;
			margin: 0 auto;
		}

		th, td {
			padding: 12px 15px;
			text-align: center;
			border: 1px solid #ddd;
			font-size: 18px;
			font-family: Arial, sans-serif;
		}

		th {
			background-color: #3b5998;
			color: #fff;
			font-weight: bold;
			text-transform: uppercase;
			letter-spacing: 2px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2;
		}

		tr:hover {
			background-color: #ddd;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Cedula</th>
				<th>Celular</th>
				<th>Correo electrónico</th>
				<th>Usuario</th>
				<th>Fecha de Creacion</th>
			</tr>
		</thead>

		<tbody>
			<?php
			include("/var/www/html/conexion.php");

			$sql = "SELECT adm_nombres, adm_apellidos, adm_cedula, adm_celular, adm_gmail, adm_usuario, adm_datacreado FROM ADMINISTRADORES";
			$resultado = $conn->query($sql);

			if ($resultado->num_rows > 0) {
				while($fila = $resultado->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$fila["adm_nombres"]."</td>";
					echo "<td>".$fila["adm_apellidos"]."</td>";
					echo "<td>".$fila["adm_cedula"]."</td>";
					echo "<td>".$fila["adm_celular"]."</td>";
					echo "<td>".$fila["adm_gmail"]."</td>";
					echo "<td>".$fila["adm_usuario"]."</td>";
					echo "<td>".$fila["adm_datacreado"]."</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='9'>No hay resultados</td></tr>";
			}

			$conn->close();
			?>
		</tbody>
	</table>
</body>
</html>

