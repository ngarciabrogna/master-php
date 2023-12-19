<?php


//debugin
$nombre =" victoR roblESSS";

var_dump($nombre);
//fechas
echo date('d-m-y');
echo "<br>";

//time
echo time();
echo "<br>";
//matematicas

echo "raiz cuadrada de 10 es: ".  sqrt(10); 
echo "<br>";

echo "numero aleatorio entre un rango: ".  rand(10, 40);
echo "<br>";

echo "Valor de PI: ".pi();
echo "<br>";

echo "Redondeo: ".  round(7.869342, 2);
//mas funciones generales:
echo "<br>";
echo gettype($nombre);
echo "<br>";  
$numero=1;
if (is_string($numero)) {
    echo "esta variable es una cadena de tesssto";
}else{
    echo "Esta variable NO NO NO es una cadena de texto";
};
echo "<br>";
if (isset($nombre)) {
    echo "la variable existe";
}else{echo "la variable NO existe";

};

echo "<br>";
//limpia los espacios en blanco de una variable
$frase= "     ALALALALALA     ";
var_dump(trim($frase));  

//eliminar variables o incices
$year= 2020;
unset($year);
var_dump($year);

//comprobar si una variable vacia

$texto= "ol";
if (empty($texto)) {
    echo "la variable esta vacia";
    
}else {
    echo "la variable tiene contenido";
};
//contar caracteres de un string
echo "<br>";
$cadena = "12345";
echo strlen($cadena);
echo "<br>";
//encontrar caracter

$frase= "la vida es bella";
echo strpos($frase, "es");
echo "<br>";
//remplazar contenido de un string
$frase = str_replace("vida","moto", $frase);
echo "$frase";
echo "<br>";
//mayusculas y minusculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
?>