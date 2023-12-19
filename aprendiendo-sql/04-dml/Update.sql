# MODIFICAR FILAS / ACTUALIOZAD DATOS #

UPDATE usuarios SET fecha = '2019-07-09', apellidos = 'ADMIN' WHERE id = 4;


SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id;

# consulta de agrupamiento con conciciones #

SELECT COUNT(titulo) AS 'Numero de entradas', categoria_id FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >=2 ;

/* 
AVG         media
COUNT       contar el numero de elementos
MAX         sacar el maximo
MIN         sacar el minimo
SUM         sumar

*/