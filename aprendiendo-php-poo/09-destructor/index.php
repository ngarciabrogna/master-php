<?php

class usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre= "victor";
        $this->email= "victor@victor.com";
        echo "Creando el objeto creada <br/>";
    }
    
    public function __toString() {
        return "Hola, {$this->nombre}, estas registrado con {$this->email}";
    }
    
    public function __destruct() {
        echo "<br/> destruyendo el objeto";
    }
    
    
}

$usuario = new usuario();

/*for ($i = 0 ; $i <= 200 ; $i++ ) {
    echo $i."<br/>";
}*/

echo $usuario;
