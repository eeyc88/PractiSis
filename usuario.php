<?php

class Usuario
{
    private $idusuario;
    private $nombre;
    private $clave;

     function __construct($idusuario, $nombre, $clave) {
       $this->idusuario = $idusuario;
       $this->nombre = $nombre;
       $this->clave = $clave;
     }

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


