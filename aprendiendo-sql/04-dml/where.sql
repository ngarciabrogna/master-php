# consulta con una condicion #

SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/* 
OPERADORES DE COMPARACION
igual           =
distinto        =
menor que       <
mayor que       >
mayor o igual   >=
menor o igual   <=
entre           BETWEEN (A and B)
EN              IN
es nulo         is null
no es nulo      is not null
COMO            LIKE
no es COMO      NOT LIKE

*/

/*
OPERADORES LOGICOS

O           OR
Y           AND
NO          NOT
*/

/* COMODINES
Cualquier cantidad de caracteres: %
un caracter desconocido: _

*/

# 1. mostrar nombre y apellido de todos los usuarios registrados en 2019
SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) =2019;
# 2. mostrar nombre y apellido de todos los usuarios QUE NO se registron en 2019
SELECT nombre, apellido FROM usuarios WHERE YEAR(fecha) != 2019  AND ISNULL(fecha) ;
# 3. mostrar email de los usuarios cuyo apellido contegna la letra A
# y que su contraseña sea 1234
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password = '1234';
# 4. Sacar todos los registros de la tabla usuarios cuyo año sea par
SELECT * FROM usuarios where (YEAR(fecha)%2 = 0);
# 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga + de 5 letras
# y ademsa que se hayan registrando antes del 2020 y mostrar el nombre en maytuscula
SELECT UPPER(nombre) AS 'Nombre', apellidos FROM usuarios WHERE (LENGTH(nombre) > 5) AND (YEAR(fecha) < 2020);