/*
CONSULTA MULTITABLA:

SON CONSULTAS QE SIRVEN PARA "CONSULTAR" VARIAS TABLAS EN UNA SOLA SENTAENCIA

*/

# MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA#

SELECT e.id, e.titulo, u.nombre, c.nombre
FROM entradas e, usuarios u, categorias c
WHERE e.usuario_id = u.id AND e.categoria_id = c.id;

# mostrar el nombre de las categorias y al lado cuantas entradas tienen #
SELECT c.nombre, COUNT(e.id)
FROM categorias c, entradas e
WHERE c.id = e.categoria_id
GROUP BY e.categoria_id;

 # Mostrar el email de los usuarios y al lado cuantas entradas tienen #

SELECT u.email,COUNT(u.id)
FROM usuarios u, entradas e
WHERE u.id = e.usuario_id
GROUP BY e.usuario_id;

# INNER JOIN ### MOSTRAR LAS ENTRADAS CON EL NOMBRE DEL AUTOR Y EL NOMBRE DE LA CATEGORIA# #

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;

# LEFT JOIN mostrar el nombre de las categorias y al lado cuantas entradas tienen #
SELECT c.nombre, COUNT(e.id) FROM categorias c
LEFT JOIN entradas e ON e.categoria_id = c.id
GROUP BY e.categoria_id;
# RIGHT JOIN mostrar el nombre de las categorias y al lado cuantas entradas tienen #
SELECT c.nombre, COUNT(e.id) FROM entradas e
RIGHT JOIN categorias c ON e.categoria_id = c.id
GROUP BY e.categoria_id;

te mantiene todas las filas de la izquierda y te muestra las coincidencias de la derecha.