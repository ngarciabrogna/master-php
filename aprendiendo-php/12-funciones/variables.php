<?php

//variables locales: se definen en la funcion y no salen de ahi.
//al menos que hagamos un RETURN

//variables globales: las que se declaran fuera de una funcion y estan disponibles dentro y fuera
//de las funciones

//funciones variables

function  buenosDias(){
    return "hola buenos dias!!" ;
}
function  buenosTardes(){
     return "ey! que tal ha ido la comida?" ;
};

function  buenasNoches(){
     return "ya te iras a dormir? ";
}

$horario= "buenosTardes";
echo $horario();