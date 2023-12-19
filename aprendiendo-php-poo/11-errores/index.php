<?php


//capturar exepciones en codigo suceptible a errores.
try{
    if (isset($_GET['id'])) {
        echo "<h1> El parametro es: {$_GET['id']}</h1>";
        
    }else {
           throw new Exception('Faltan parametros por la URL');
    }
}  catch(Exception $e) {
    
    echo "ha habido un error: ".$e->getMessage();
} /*finally {
echo " todo correcto"    ; 
} */