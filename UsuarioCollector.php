<?php

include_once('usuario.php');
include_once('Collector.php');

class UsuarioCollector extends Collector
{
 
  function showUsuarios() {
    $rows = self::$db->getRows("SELECT idusuario,nombre,clave FROM public.usuario ");        
    $arrayUsuario= array();        
    foreach ($rows as $c){
      $aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'clave'} );
      array_push($arrayUsuario, $aux);
    }
    return $arrayUsuario;        
  }

  function showUsuario($nombre,$clave) {
    $rows = self::$db->getRows("SELECT nombre, clave FROM public.usuario where nombre = '$nombre' and clave = '$clave'");
    $arrayUser= array();
	foreach ($rows as $c){
	$aux = new Usuario($c{'idusuario'},$c{'nombre'},$c{'clave'});
	array_push($arrayUser, $aux);
	}
    return $arrayUser;
  }

  function deleteUsuarios($id) {
    $rows = self::$db->deleteRow("DELETE FROM public.usuario where idusuario = $id", null);             
	return true;
  }

  function insertUsuarios($nombre, $clave) {
    $rows = self::$db->insertRow("Insert into public.usuario (nombre, clave) values ('$nombre' , '$clave' )" , null);             
	return true;
  }

  function updateUsuarios($id,$nombre, $clave) {
    $rows = self::$db->updateRow("Update public.usuario set nombre = '$nombre', clave = '$clave' where idusuario =$id", null);             
	return true;
  }

}
?>

