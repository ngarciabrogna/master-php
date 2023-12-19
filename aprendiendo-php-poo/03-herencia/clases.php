<?php

//HERENCIA: LA posibilidad de compartir atributos y metodos (funciones) entre clases.

class persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }


    public function hablar() {
        return "estoy hablando";
    }
    
     public function caminar() {
        return "estoy caminando";
    }
    
}

class informatico extends persona{
    
    public $lenguajes;
    public $experienciaProgramador;
    
    public function __construct() {
        $this->lenguajes = "HTML, CSS Y JS";
        $this->experienciaProgramador = 10;
    }


    public function sabeLenguajes($lenguajes) {
        $this->lenguajes =$lenguajes;
        return $this->lenguajes;
    }   


    public function programar() {
        return "soy programmer";
    }
    public function repararOrdenador() {
        return "soy reparador de pc";
    }    
    public function hacerOfimatica() {
        return "Estoy escribiendo en word";
    }
}

class tecnicoRedes extends informatico{
    
    public $auditarRedes;
    public $experenciaRedes;
    
    public function __construct() {
        parent::__construct();
        $this->auditarRedes = 'experto';
        $this->experenciaRedes = 5;
    }

    public function auditoria() {
        return "estoy auditando una red";
        
    }
}