<?php

/* 
TIPOS DE DATOS:
 * entero (int) : 99
 * coma flotante (decimal) (float o double): 3.44
 * cadena de caracteres (strings) : "texto" 
 * booleano (boolean) (bool) = true or false , 1 o 0
 * null
 * ARRAY (coleccion de datos)
 * objetos
  */

$numero = 100;
$decimal= 2.24;
$verdadero = true;
echo gettype($numero).'</br>';
echo gettype($verdadero).'</br>';
echo gettype ($decimal);

//Las variables no pueden:
// COMENZAR CON UN NUMERO
// LLEVAR GUIONES MEDIOS
//CONTENER SIGNOS DE OPERADORES


//debugear
$mi_nombre = "Nicolas";
var_dump($mi_nombre);
?>
