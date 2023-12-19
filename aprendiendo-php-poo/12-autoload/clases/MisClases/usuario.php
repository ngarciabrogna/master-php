<?php

namespace MisClases;

class usuario {
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Victor robles";
        $this->email = "victor@robles.com";
    }
}