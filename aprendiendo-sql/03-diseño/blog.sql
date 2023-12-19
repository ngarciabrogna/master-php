
CREATE TABLE usuarios( 
id int(255) auto_increment not null,
nombre varchar(128) not null,
apellidos varchar(128) not null,
email varchar(255) not null,
password varchar(255) not null,
fecha date not null,
CONSTRAINT pk_usuarios PRIMARY KEY(id),
CONSTRAINT uq_imail UNIQUE(email)
)ENGINE=InnoDb;
# respetar la integridad referencial

CREATE TABLE categorias (
id int (255) auto_increment not null,
nombre varchar (128) not null,
CONSTRAINT pk_categoias PRIMARY KEY(id)

)ENGINE=InnoDb;

CREATE TABLE entradas (
id int (255) auto_increment not null,
usuario_id int (255) not null,
categoria_id int (255) not null,
tirulo varchar (255) not null,
descripcion MEDIUMTEXT,
fecha date not null,
CONSTRAINT pk_entradas PRIMARY KEY (id),
CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios (id),
CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categoria (id)

)ENGINE=InnoDb;