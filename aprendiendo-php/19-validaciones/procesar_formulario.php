<?php
$error = 'faltan_datos';

if(!empty($_POST['nombre']) && 
        !empty($_POST['apellidos']) && 
        !empty($_POST['edad']) && 
        !empty($_POST['email']) && 
        !empty($_POST['pw']))  
    {
    $error='ok';
    
    
    $nombre=$_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $edad = (int) $_POST['edad'];
    $email = $_POST['email'];
    $pw = $_POST['pw'];      
    
    //validar el nombre
    if (!is_string($nombre) || !preg_match("/[0-9]/", $nombre)) {
    $error = 'nombre';
    
    }
    
    if (!is_string($apellidos) || !preg_match("/[0-9]+/", $apellidos)){
        $error = 'nombre'; 
       }
    if (!is_int($edad) || filter_var($edad,FILTER_VALIDATE_INT)){
        $error = 'edad'; 
       }
    if (!is_string($email) || filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error = 'email'; 
       }
       
    if (empty($pw) || strlen($pw<5)){
        $error = 'pw'; 
       }
}else{
    $error = 'faltan_datos';
} 
if ($error!='ok')
    header("Location:index.php?error=$error");   
?>

<!DOCTYPE HTML>
<html lang="ES">
    <head>
        <meta charset="UTF-8" />
        <title> Validacion de formularios </title>
    </head>
    <body>
        <?php if($error == 'ok'):?>
        
<h1>Datos Validados Correctamente</h1>
<p><?=$nombre?></p>
<p><?=$apellidos?></p>
<p><?=$edad?></p>
<p><?=$email?></p>
<?php endif; ?>
            

       
    </body>
</html>
