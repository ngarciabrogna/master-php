/* vistas:
consulta almacenada en la base de datos que se utiliza como una tabla virtual y no almacena datos
si no que utiliza asociaciones y los datos de las tablas orginales de las tablas de 
forma que siempre se mantiene actualizada
 */


CREATE VIEW entradas_con_nombres as 
SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoria'
FROM entradas e 
INNER JOIN usuarios u ON e.usuario_id = u.id
INNER JOIN categorias c ON e.categoria_id = c.id;