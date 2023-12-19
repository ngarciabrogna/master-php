<?php
session_start();

//variable de sesion

$_SESSION['variable_predeterminada'] = "hola soy una variable de sesion activa";

echo $_SESSION ['variable_predeterminada'];
