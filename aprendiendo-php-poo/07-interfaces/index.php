<?php

//contrato donde definimos que metodos van a tener, pero cuando lo implementemos se debera cumplir todo.

interface ordenador{
    public function encender();
    public function apagar ();
    public function reinciar ();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements ordenador{
    private $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    
    public function encender() {
       return "lo que sea" ;
    }
    public function apagar() {
        return "lo que sea" ;
    }
    public function reinciar() {
        return "lo que sea" ;
    }
    public function desfragmentar() {
        return "lo que sea" ;
    }
    public function detectarUSB() {
        return "lo que sea" ;
    }



}

$maquintos = new iMac();

