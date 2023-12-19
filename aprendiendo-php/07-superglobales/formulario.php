<!DOCTYPE HTML>
<html lang ="es">
    <head> 
        <meta charset="UTF-8" />
        <title>
            Formulario PHP
        </title>
    </head>
    
    <body>
        <h1>MI FORMULARIO CON METODOS EN PHP</h1>
        <form method="GET" action="recibir.php"> 
            <p>
                <label for="nombre">Nombre </label>
                <input type="text" name ="nombre" />
            </p>
             <p>
                <label for="apellidos">Apellidos </label>
                <input type="text" name ="apellidos" />
            </p>
                
            <input type="submit" value="enviar datos">
        </form>
        
               <form method="POST" action="recibir.php"> 
            <p>
                <label for="nombre">Nombre por POST </label>
                <input type="text" name ="nombre" />
            </p>
             <p>
                <label for="apellidos">Apellidos </label>
                <input type="text" name ="apellidos" />
            </p>
                
            <input type="submit" value="enviar datos">
        </form>
    </body>
</html>

//ahora cambiamos el metodo GET por POST y los parametros viajarian ocultos,
// y no por la URL.

