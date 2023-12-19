
<?php
//Programacion orientada a objetos en PHP (POO)

//definir una clase
//molde para crear mas objetos de tipo coche con caracteristicas parecidas.
class Coche {
    
    //atributos o propiedades (variables)
    
    //PUBLIC:podemos acceder a el desde cualquier lugar, dentro de la clase actual
    //dentro de clases que hereden de esta clase o incluso fuera de la clase.
    public $color;
    //Podemos acceder a ellos desde la clase que lo define y desde clases que hereden esta clase.
    protected $marca;
    //unicamente se puede acceder deste esta clase (la que lo define)
    private $modelo;
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas) {
        
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }


    //Metodos, son acciones que realiza el objeto (antes serian funciones)
    
    public function getColor() {
        
        //busca en esta clase la propiedad X
        return $this->color;
    }
    
    public function setColor($color) {
      $this->color = $color;  
    }
    
    public function setModelo($modelo) {
        $this->modelo= $modelo;
    }
     public function setMarca($marca) {
        $this->marca= $marca;
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
   
   public function mostrarInformacion(Coche $miObjeto) {
       
       if (is_object($miObjeto)) {
        $informacion = "<h1>Informacion del coche</h1>";
        $informacion .= "<br/> Color: ".$miObjeto->color;
        $informacion .= "<br/> Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/> Velocidad: ".$miObjeto->velocidad;
     }else {
        $informacion = "Tu dato es este: $miObjeto" ;
     }
     return $informacion;
     
   }
   
} // FIN DEFINICION DE LA CLASE

