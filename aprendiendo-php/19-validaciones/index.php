<!DOCTYPE HTML>
<html lang="ES">
    <head>
        <meta charset="UTF-8" />
        <title> Validacion de formularios </title>
    </head>
    <body>
        
        <h1>Validar formularios en PHP</h1>
        
        <?php
        if(isset($_GET['error'])) {
            
        $error = $_GET['error'];
        if($error == 'faltan_datos'){
        
            echo '<strong style="color:red"> introduce todos los datos en el formulario </strong>';
        
                }
         if($error == 'nombre'){
        
            echo '<strong style="color:red"> introduce bien el nombre </strong>';
        
                }
                
         if($error == 'apellidos'){
        
            echo '<strong style="color:red"> El / los apellidos no son correctos </strong>';
        
                }
                
         if($error == 'email'){
        
            echo '<strong style="color:red"> Emeil formato no valido.  </strong>';
        
                }
                
        if($error == 'pw'){
        
            echo '<strong style="color:red"> Introduce una contraseña de mas de 5 caracteres </strong>';
        
                }    
            }
        
        
        
        ?>
        
        <form method="POST" action="procesar_formulario.php" >
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Za-z]+"><br/>
            
            <label for="apellidos">Apellidos</label><br/>
            <input type="text" name="apellidos"  pattern="[A-Za-z]+"><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"><br/>
            
            <label for="email">email</label><br/>
            <input type="email" name="email" required="required"><br/>
            
             <label for="pw">password</label><br/>
             <input type="password" name="pw" required="required"><br/>
             
             <input type="submit" value="Enviar"/>
    
        </form>
    </body>
</html>