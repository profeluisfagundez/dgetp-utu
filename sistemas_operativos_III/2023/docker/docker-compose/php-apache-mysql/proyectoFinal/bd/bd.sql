CREATE DATABASE usuarios;
USE usuarios;
CREATE TABLE usuario(
	ci VARCHAR(8) NOT NULL PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30) NOT NULL,
    direccion VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    celular VARCHAR(9) NOT NULL);
INSERT INTO usuario(ci,nombre,apellido,direccion,email,celular) VALUES('12223334','Foo','Bar','foo 4563 esq bar','foo@bar','098345765');
SELECT * FROM usuarios.usuario;
