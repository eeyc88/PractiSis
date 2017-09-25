<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menú</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet" >
        <link href="css/tablas.css" rel="stylesheet" >
  	<link href="css/bootstrap.min.css" rel="stylesheet">
  	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
/* paso los valores del método POST a variables globales */

	$fname = $_POST['nombre'];
	$lname = $_POST['apellido'];

/* incluso mi clase de tipo UsuarioCollector.php */

	include_once('UsuarioCollector.php');

/* instancio un objeto de tipo UsuarioCollector */

	$objUsuarioCollector = new UsuarioCollector();

/* uso del método insertar de la clase UsuarioCollector */

	$objUsuarioCollector->insertUsuarios($fname,$lname);

/* mensaje de que se insertó correctamente */

	echo "<br>";
	echo "<div class='container'>";
	echo "	<h2> Usuarios </h2>";
	echo "	<div class='panel panel-default'>";
	echo "		<div class='panel-heading'> Registro Ingresado Correctamente </div>";
	echo "		<br>";
	echo "		<div class='panel-body'>$fname $lname</div>";
	echo "	</div>";
	echo "</div>";
?>

	<a href="lista.php">Ver lista de usuarios </a>
	<a href="login.php">continuar ingresando usuarios</a>

</body>
</html>
