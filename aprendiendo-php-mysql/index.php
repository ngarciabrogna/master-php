<?php

//conectar  a la base de datos

$conexion = mysqli_connect("localhost", "root", "", "phpmysql") ;

//comprobar si se conecto correctamente

if(mysqli_connect_errno()) {
    echo "la conneccion a la base de datos ha fallado ".mysqli_connect_error();
} else {
    echo "Coneccion realizada exitosamente" ;
}

//consulta para configurar la codificiacion de caracteres.

mysqli_query($conexion, "SET NAMES 'UTF8'");

// consulta select desde php

$query = mysqli_query($conexion, "SELECT * FROM notas");

while($notas = mysqli_fetch_assoc($query)) {
    echo "<h2>".$notas['titulo']."</h2>";
    echo "<h4>".$notas['descripcion']."</h4>";
}

//insertar en la base de dato desde php
$sql = "INSERT INTO notas VALUES(null, 'Nota desde php', 'Esto es una nota desde php' , 'green')";

$insert = mysqli_query($conexion, $sql);

        if($insert){
            echo "Datos insertados CORRECTAMENTE";
        } else {
            echo "Error: ".mysqli_error($conexion);
        }


