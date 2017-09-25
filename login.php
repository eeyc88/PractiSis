<?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Muestra de datos</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width = device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/jquery.bootgrid.min.js"></script>
		<script src="js/jquery-1.11.1.min.js"></script>
	</head>
	<body>

<!-- aquí el valor de las variables de sesion pasan a variables normales -->

<?php

	$usuario = $_SESSION['USER'];
	$_SESSION['USER'] = $usuario;

	$contraseña = $_SESSION['PASS'];
	$_SESSION['PASS'] = $contraseña;


/* traigo otro dato mediante POST */

	echo "Bienvenido usuario ".$_SESSION['USER']." su clave es: ".$_SESSION['PASS'];
	echo "<a href='logout.php'><span class='glyphicon glyphicon-log-out'></span>Salir</a>";
?>

</body>
</html>
