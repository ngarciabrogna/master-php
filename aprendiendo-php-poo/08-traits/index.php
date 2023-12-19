<?php


//TRAIT: nos permite definir una serie de metodos para compartirlo en distintas clases
trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}
class coche {
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class persona {
    public $nombre;
    public $apellidos;
    
    use Utilidades;
}

class videojuego {
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new coche();
$coche->nombre = "ferrari";

$persona = new persona();
$persona->nombre = "Jose y alvaro";

$videojuego = new videojuego();
$videojuego->nombre = "GTA";


$coche->mostrarNombre();
$persona->mostrarNombre();
$videojuego->mostrarNombre();