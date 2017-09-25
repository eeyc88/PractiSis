<?php

// en este archivo se preguntara si es que la sesion esta iniciada, y en caso
// de que sí, pues destruimos la sesion, finalizando con un popup avisandonos
// de que hemos cerrado la sesion y en conclusion nos manda a la pagina
// index.php

session_start();

if(isset($_SESSION['USER']))
{
	session_destroy();
}
?>

<script>
	alert('Ha cerrado su sesion');
	window.location="index.php";
</script>
