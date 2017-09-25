<?php

/* he aquí los datos que se mandan a través del método POST desde index.php */

	$name = $_POST['nombre'];
	$password = $_POST['clave'];

/* aquí se incluye el archivo UsuarioCollector.php, para oder utilizar
sus métodos o funciones despues de instanciar un objeto de este tipo.
UsuarioCollector muy a parte de tener funciones que interactuan con la
base de datos, lleva incluido la clase Collector.php, el cual sirve para
conectarse a la base de datos y a su vez lleva incluido la clase
"dataBase.php", el cual tiene todos las funciones genericas (query),
y tambien los parametros de conexion para la base de datos.*/

	include_once('UsuarioCollector.php');

/* instancia de la clase UsuarioCollector */

	$UsuarioCollectorObj = new UsuarioCollector();

/* se utiliza el foreach para buscar en todos los registros que existen
en la tabla Usuario que se encuentra en la base de datos. */

	foreach($UsuarioCollectorObj->showUsuario($name,$password) as $c)
	{
		/* aqui se valida que los datos que se ingresan
		estén en la base de datos */

		if(($c->getNombre()==$name)&&($c->getClave()==$password)){
			session_start();
			$_SESSION['USER'] = $name;
?>


	/* se utiliza código script para mostrar un popup de acceso valido */

		<script>
			alert('Acceso Exitoso');
			window.location = "login.php";
		</script>
<?php
		}/* cierre del condicional if */
	}/* cierre de la instruccion ciclica foreach */
?>

	/* código script para negar el acceso */

		<script>
			alert('Acceso Denegado');
			window.location = "../index.php";
		</script>
