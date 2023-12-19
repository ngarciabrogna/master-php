# SUBCONSULTAS:
# Son consultas que se ejecutan dentro de otras
# consiste en utilizar los resultados de la subconsulta
# Para operar en la consulta PRINCIPAL
# Jugando con las claves ajenas (foraneas) FK.



# SACAR USUARIOS CON ENTRADAS #
SELECT * FROM USUARIOS WHERE id IN (SELECT usuario_id FROM entradas);
# SACAR USUARIOS SIN ENTRADAS #
SELECT * FROM USUARIOS WHERE id NOT IN (SELECT usuario_id FROM entradas);

# sacar usuarios que tengan alguna entrada que en su titulo hable de GTA #

SELECT nombre, apellidos FROM usuarios WHERE id 
IN (SELECT usuario_id FROM entradas WHERE titulo LIKE '%GTA%');


# SACAR TODAS LAS ENTRADAS DE LA CATEGORIA ACCION, UTILIZANDO SU NOMBRE #

SELECT titulo FROM entradas WHERE categoria_id 
                IN (SELECT id FROM categorias WHERE nombre = 'accion');

# MOSTRAR LAS CATEGORIAS CON MAS DE 3 ENTRADAS #

SELECT * FROM categorias WHERE id
IN (SELECT categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(categoria_id) >=3);

# MOSTRAR LOS USUARIOS QUE CREARON UNA ENTRADA UN MARTES #

SELECT * FROM usuarios WHERE id IN (SELECT usuario_id FROM entradas WHERE DAYOFWEEK(fecha)=3);

# MOSTRAR EL NOMBRE DE EL USUARIO QUE TENGA MAS ENTRADAS #
SELECT CONCAT(nombre, '' , apellidos) AS 'el usuario con mas entradas' FROM usuarios WHERE id = 
(SELECT usuario_id,entradas FROM entradas GROUP BY usuario_id ORDER BY COUNT(id) DESC LIMIT 1);

# MOSTRAR LAS CATEGORIAS SIN ENTRADAS #

SELECT * FROM categorias WHERE id NOT IN (SELECT categoria_id FROM entradas);