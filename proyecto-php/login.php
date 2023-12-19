<?php
//Iniciar la sesion y la coneccion a la base de dato.
require_once 'includes/conexion.php';
//recoger los datos del formulario
if(isset($_POST)) {
        //borrar sesion antigua
        if(isset($_SESSION['error_login'])){        
        //session_unset($_SESSION['error_login']);
        unset($_SESSION['error_login']);
        }
        //recoger datos del formulario
        $email = trim($_POST['email']);
        $password = $_POST['password'];
}
//consulta a la base de datos para comprobar las credenciales del usuario. 
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$login = mysqli_query($db,$sql);

if ($login && mysqli_num_rows($login) == 1) {
 
       $usuario  = mysqli_fetch_assoc($login);
   
            //comprobar la contraseña // cifrarla de nuevo
        $verify = password_verify($password, $usuario['password']);
             if($verify){
                 
            //utilizo una sesion para guardar el usuario logeado
            $_SESSION['usuario'] = $usuario;
            
            
            
    }else {
        //si algo falla enviar una sesion con el fallo.
        $_SESSION['error_login'] = "Login incorreccto";
    }
}else {
 $_SESSION['error_login'] = "Login incorreccto";
 
    var_dump ($usuario);
    die();
}

//redirigir al index.php

header('location: index.php');