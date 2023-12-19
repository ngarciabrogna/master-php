<?php
//Programacion orientada a objetos en PHP (POO)

//definir una clase
//molde para crear mas objetos de tipo coche con caracteristicas parecidas.
class Coche {
    
    //atributos o propiedades (variables)
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
    //Metodos, son acciones que realiza el objeto (antes serian funciones)
    
    public function getColor() {
        
        //busca en esta clase la propiedad X
        return $this->color;
    }
    
    public function setColor($color) {
      $this->color = $color;  
    }
    
    public function getModelo(){ 
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo= $modelo;
    }
    
    public function acelerar() {
        $this->velocidad++; 
    }
    
   public function frenar() {
        $this->velocidad--;
   
   }
   
   public function getVelocidad() {
       return $this->velocidad;
   }
   
} // FIN DEFINICION DE LA CLASE


//crear objeto (INSTANCIAR LA CLASE)

$coche = new Coche();

//usar los metodos
//echo $coche->getVelocidad();

$coche->setColor("amarillo");
echo "El color del coche es ".$coche->getColor().'<br>';

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "Velocidad del coche ".$coche->getVelocidad();

$coche2 = new Coche();
$coche2->setColor("verde");
$coche2->setModelo("gallardo");

var_dump($coche);
var_dump($coche2);
