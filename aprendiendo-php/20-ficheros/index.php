<?php

//abrir archivo
$archivo = fopen("fichero_texto.txt","a+");

//leer contenido
while (!feof($archivo)){
$contenido = fgets($archivo);
echo $contenido."<br/>";
}   


//escribir en un archivo

fwrite($archivo,"soy un texto insertado desde php");



//cerrar archivo
fclose($archivo);


//copiar archivo

copy("fichero_texto.txt","fichero_copiado.txt") or die("Error al copiar");

//renombrar

rename("fichero_copiado.txt","'archivo_renombradito.txt");

//eliminar

//unlink("'archivo_renombradito.txt") or die('Error');

//verificar exist4encia de archivo

if (file_exists("fichero_texto.txt")) {
    echo " <br/> <h1> el archivo existe </h1>";
}else {
    echo "<br/>";
    echo "<h1> no existe ese archivo </h1>";
}