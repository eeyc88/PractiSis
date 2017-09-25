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
include_once("UsuarioCollector.php");
$UsuarioCollectorObj = new UsuarioCollector();

echo "<div class='container'>";
echo "<h2>Usuarios</h2>";
echo "<div class='table-responsive'>"; 
echo "<table class='table'>"; 
echo "<thead>"; 
echo "<tr>"; 
echo " 	   <th>Código</th>"; 
echo "     <th>Nombre</th>"; 
echo "     <th>Apellido</th>";
echo "</tr>";
echo "</thead>";

foreach($UsuarioCollectorObj->showUsuarios() as $c){
	echo "<tbody>";
	echo "<tr>";
	echo "<td>".$c->getIdusuario()."</td>";
	echo "<td>".$c->getNombre()."</td>";
	echo "<td>".$c->getClave()."</td>";
}
echo "</tbody>";
echo "</table>";
echo "</div>";
echo "</div>";
?>

<a href="login.php">Volver</a>
</body>
</html>
