<?php

class Usuario
{

 /* atributos de la clase Usuario */

    private $idusuario;
    private $nombre;
    private $clave;

 /* constructor de la clase Usuario */

     function __construct($idusuario, $nombre, $clave) {
       $this->idusuario = $idusuario;
       $this->nombre = $nombre;
       $this->clave = $clave;
     }

 /* metodos getters y setters de la clase Usuario */

     function setIdusuario($idusuario){
       $this->idusuario = $idusuario;
     } 
     function getIdusuario(){
       return $this->idusuario;
     } 
     function setNombre($nombre){
	       $this->nombre = $nombre;       
     } 
     function getNombre(){
       return $this->nombre;
     } 

     function setClave($clave){
       $this->clave = $clave;
     } 
     function getClave(){
       return $this->clave;
     } 

}


?> 


