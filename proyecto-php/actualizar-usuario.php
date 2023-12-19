<?php

if(isset($_POST)) {
    require_once 'includes/conexion.php'; //conecto a la bd


    
    //recoger los valores del formulario de actualizacion
    //
    //con operador TERNARIO para no hacer muchos IF
    $nombre= isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    $apellidos= isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
    $email= isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
   
}

//mysqli_real_escape_string  -->> nos da seguridad en el formulario en casos de que quieran modificar
//la consulta enviando una sentencia a traves del form.(no interpreta las comillas y eso)

//array de errores
$errores = array();

//validar los datos antes de guardarlos en la base de datos

//validar campo "nombre"
if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
    $nombre_validado = true;
}else {
    $nombre_validado = false;
    $errores['nombre'] = "El nombre no es valido";
}




//validar campo "apellidos"
if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
    $apellidos_validado = true;
}else {
    $apellidos_validado = false;
  
    $errores['apellidos'] = "Los apellidos no son validos";
}



//validar campo "email"
if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
    $email_validado = true;
}else {
    $email_validado = false;
    $errores['email'] = "El email no es valido";
}


$guardar_usuario = false;
if (count($errores) == 0) {
      $usuario = $_SESSION['usuario'];
      $guardar_usuario = true;
      
//comprobar si el email  ya existe:
$sql = "SELECT id, email FROM usuarios WHERE email = '$email'";
$isset_email = mysqli_query($db, $sql);
$isset_user = mysqli_fetch_assoc($isset_email);
      
  if($isset_user['id'] == $usuario['id'] || empty($isset_user)){  
//ACTUALIZAR USUARIO EN LA BD
    
    $sql = "UPDATE usuarios SET ".
            "nombre ='$nombre', ".
            "apellidos = '$apellidos', ".
            "email = '$email'". 
            "WHERE id = ".$usuario['id'];
            
    $guardar = mysqli_query($db, $sql);

        if($guardar) {
            $_SESSION['usuario']['nombre'] = $nombre; //actualizo los datos de la session.
            $_SESSION['usuario']['apellidos'] = $apellidos;
            $_SESSION['usuario']['email'] = $email;
            
            $_SESSION['completado'] = "Tus datos se han actualizado con éxito";
        }else {
            $_SESSION['errores']['general'] =  "Fallo actualizar tus datos!!";
        }
  
  }else {
     $_SESSION['errores']['general'] =  "El usuario ya existe";  
  }
}else {
    $_SESSION['errores'] = $errores;
    
}
header('Location: mis-datos.php');

