<?php
require_once 'clases.php';

$persona = new persona();
$persona->setNombre("Victor");
var_dump($persona);

$informatico = new informatico();
$informatico->setAltura(1.90);
$informatico->sabeLenguajes("HTML, CSS, JAVASCRIPT, PHP");
var_dump($informatico);

$tecnico = new tecnicoRedes();
var_dump($tecnico);