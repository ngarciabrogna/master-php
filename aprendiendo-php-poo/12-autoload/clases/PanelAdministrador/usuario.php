<?php

namespace PanelAdministrador;

class usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Antonio Pineda";
        $this->email = "antonio@antonio.com";
    }
}