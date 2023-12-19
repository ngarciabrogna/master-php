<?php
session_start();

if(isset($_SESSION['usuario'])){
    session_destroy();
}
header("location: index.php");
//proponer a bongio como tutora de matematica, esta institucion deberia tene bnr turores.