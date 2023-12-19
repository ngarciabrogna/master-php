<?php

/* 
Funcion: es un conjunto de intrucciones agrupadas bajo un nombre en concreto y que pueden
 * reutilizarse solamente invocando a la funcion tantas veces como queramos
 
  */

//calculadora
function calculadora ($numero1, $numero2,$negrita =false) {
    //conjunto de instrucciones a ejectura
    $suma= $numero1+$numero2;
    $resta= $numero1-$numero2;
    $multiplicacion= $numero1*$numero2;
    $division= $numero1/$numero2;
    if ($negrita != false) {
        $cadena_texto="";
        
        echo $cadena_texto.="<h1>";
        
    }    
$cadena_texto.="Suma: $suma <br/>";
$cadena_texto.="resta: $resta <br/>";
$cadena_texto.="multiplicacion: $multiplicacion <br/>";
$cadena_texto.="division: $division <br/>";
$cadena_texto.="<hr>"; 

if ($negrita != false) {
    $cadena_texto.="</h1>";
    
   return $cadena_texto;     
} 
}

echo calculadora(10, 30,true);