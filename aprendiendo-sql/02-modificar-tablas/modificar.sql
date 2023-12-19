# renombrar una tabla

ALTER TABLE usuarios RENAME TO usuarios_renom;

# cambiar el nombre de una columna:

ALTER TABLE usuarios_renom CHANGE apellidos apellido varchar(128) null;

# modificar columna sin cambiar nombre

ALTER TABLE usuarios_renom MODIFY apellido varchar (256) not null;