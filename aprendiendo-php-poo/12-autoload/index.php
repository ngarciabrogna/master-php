<?php
require_once 'autoload.php';

/*require_once 'clases/usuario.php';
require_once 'clases/categoria.php';
require_once 'clases/entrada.php';
*/
//$usuario = new usuario();
//$usuario->nombre;


/*echo $usuario->nombre;
echo "<br/>";
echo $usuario->email;

$categoria = new categoria();
echo "<br/>".$categoria->nombre;*/

// ESPACIOS DE NOMBRES Y PAQUETES

use MisClases\usuario;
use MisClases\categoria;
use MisClases\entrada;
use PanelAdministrador\usuario as UsuarioAdmin;

class principal {
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function setEntrada($entrada) {
        $this->entrada = $entrada;
    }

        public function __construct() {
        $this->usuario = new usuario();
        $this->categoria = new categoria();
        $this->entrada = new entrada();
    }
    
    function informacion () {
        echo __METHOD__;
    }
}

//OBJETO PRINCIPAL
$principal = new principal();
$principal->informacion();
//var_dump($principal->usuario);

$metodos = (get_class_methods($principal));
$busqueda = array_search('SetEntrada', $metodos);
var_dump($busqueda);

//OBJETO OTRO PAQUETE
$usuario = new UsuarioAdmin();
var_dump($usuario);

//comprobar si existe una clase.
$clase = class_exists('MisClases\usuario');

if ($clase) {
  echo "<h1> La clase existe </h1>"  ;
}else{
    echo "<h1>La clase no existe";
}