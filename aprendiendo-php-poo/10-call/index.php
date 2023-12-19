<?php

/* 
ES COMO LA SOBRECARGA DE METODOS DE JAVA, aunque los TRAITS son la verdadera sobrecarga.
 */

class persona {
    private $nombre;
    private $edad;
    private $ciudad;
    public function __construct($nombre, $edad, $ciudad) {
       $this->nombre = $nombre;
       $this->edad = $edad;
       $this->ciudad = $ciudad;
    }
    
    public function __call($name, $arguments) {
        $prefix_metodo = substr($name,0, 3);
  
        if($prefix_metodo == 'get'){
         $nombre_metodo = substr(strtolower($name), 3);
         
         if(!isset($this->$nombre_metodo)) {
            
            return "el metodo que estas invocando no existe";
        }
         
         return $this->$nombre_metodo;
        }else{
            return "el metodo que estas invocando no existe";
        }
        
    }
}


$persona = new persona("Paco", 66, "Madrid");
echo $persona->getNombre();
echo $persona->getEdad();
echo $persona->getCiudad();
echo $persona->getHola();