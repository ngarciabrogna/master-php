/*
CREAR TABLA
*/
/* 
int(nº de cifras) entero
integer(nº de cifras) entero
varchar (nº de caracteres) String
char (nº de caracteres) String
float (nº de cifras,nº de decimales) Decimal (coma flotante)
date,time,timestamp


//strings mas grandes


TEXT 65235 caracteres
MEDIUMTEXT 16 millones de caracteres
LONGTEXT 4 Billones de caracteres

//Numeros mas grandes

MEDIUMING
BIGINT


*/
CREATE TABLE usuarios(
id int(11) auto_increment not null,
nombre varchar(128) not null,
apellidos varchar(128) default 'Garcia',
email varchar(128) not null,
password varchar(128),
CONSTRAINT pk_usuarios PRIMARY KEY (id)
);