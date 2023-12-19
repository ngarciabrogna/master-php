<?php
//crear directorio

if(!is_dir('mi_carpeta')){
mkdir('mi_carpeta',0777) or die('no se puede crear la carpeta');
echo ' se creo la carpeta';
} else {
    echo "la carpeta ya existe";
}

//borrar directorio

rmdir('mi_carpeta');