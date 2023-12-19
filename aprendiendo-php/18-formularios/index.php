<!DOCTYPE HTML>
<html lang ="es"> 
    <head>
        <meta charset="UTF-8"
              <title>
            Formularios PHP Y HTML </title>
    </head>


    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
             <p><label for="nombre">  nombre: </label> 
             <input type="text" name="nombre" autofocus="nombre" placeholder="Pone tu nombre gato" /> </p>
             <p><label for="apellido">  apellido: </label>
            <input type="text" name="apellido" pattern="[A-Z]+" required="required" /> </p>
             
             <p> <input type="submit" value="Enviar" /></p>
            
             <p> <label for="boton"> boton: </label>
           <input type="button" name="apellido" value="Click me plz" /> </p>
            
            <label for="sexo"> sexo: </label>
            <p> hombre <input type="checkbox" name="sexo" value="Hombre" /> 
                mujer  <input type="checkbox" name="sexo" value="Mujer"/> </p>
            
            <label for="color"> color: </label>
            <p> <input type="color" name="color" </p>
            
             <p> <label for="fecha"> fecha: </label>
              <input type="date" name="fecha" </p>
             
              <p><label for="correo"> correo: </label>
              <input type="email" name="correo" </p>
             
              <p><label for="archivo"> archivo: </label>
              <input type="file" name="archivo" multiple="multiple"</p>
             
              <p><label for="correo"> correo: </label>
              <input type="email" name="correo" </p>
             
               <p><label for="numero"> numero: </label>
              <input type="number" name="numero" </p>
               <p> <label for="contraseña"> contraseña: </label>
               <input type="password" name="contraseña" </p>
              
               <p><label for="continente"> continente: </label> </P>
                <p> 
                  America del sur <input type="radio" name="continente" value="America Latina" />
                  Europa  <input type="radio" name="continente" value="Europa" />
                  Asia <input type="radio" name="continente" value="Asia" />
               
               </p>
               
                <p>  <label for="web"> web: </label>
               <input url="we" name="web" </p> <br/>
               
                <p> <textarea> </textarea> </p> <br/>
               
               Peliculas:
               <select name="peliculas">
                   <option value="Spiderman">Spiderman</option>
                   <option value="Batman">Batman</option>
                   <option value="La jungla de cristal">La jungla de cristal</option>
                   <option>Gran torino</option>
                   
               </select> <br/>
        </form>    
    </body>

</html>    
<?php
?>

