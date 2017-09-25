<!-- para el caso de que exista alguna sesion abierta -->
<?php
session_start();
?>

<!-- En esta parte del código html, importo los archivos .css --> 
<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta name= "viewport" content= "width = device-width, initial-escale=1.0">
	<meta http-equiv= "Content-Type" content= "text/html; charset=UTF-8" />
	<link rel= "stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel= "stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="jumbotron boxlogin" >
	<img src="../images/logo.png" alt="LOGIN" title="LOGIN" style="width:279px;height:47px;">

<!-- en este fragmento de código php se pregunta que si existe alguna sesion activa, caso contrario se ingresa normalmente al formulario --> 
<?php

	if(isset($_SESSION['USER'])){
	echo "<p> Hola ".$_SESSION['USER']."[<a href='logout.php'>Cerrar Sesión</a>]";
	}else{
	}
?>
	<form method="POST" name="flogin" id="flogin" action="validacion.php">
 		<label> Nombre de Usuario: </label>
		<input type="text" name="nombre" id="nombre" class="form-control">
		<label> Contraseña: </label>
		<input type="password" name="clave" id="clave" class="form-control">
		<input type="submit" value="Conectarse" class="btn btn-success"/>
	</form>
	</div>
</body>
</html>
