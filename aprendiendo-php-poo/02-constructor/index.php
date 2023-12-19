<?php

require_once 'coche.php';

$coche = new coche("Amarillo", "renault", "Clio", 150, 200, 5);
$coche2 = new coche("Verde", "Seat", "Panda", 250, 200, 5);
$coche3 = new coche("Azul", "Citroen", "Xara", 100, 220, 4);
$coche4 = new coche("Rojo", "Mercedes", "Clase A", 350, 100, 3);


echo $coche->mostrarInformacion($coche);
/* var_dump($coche);
var_dump($coche2);
var_dump($coche3);
var_dump($coche4); */

