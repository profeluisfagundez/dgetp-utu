CREATE DATABASE apipersonas;
use apipersonas;
CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    apellido VARCHAR(50) NOT NULL,
    edad INT NOT NULL
);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Juan', 'Pérez', 30);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Ana', 'González', 25);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Pedro', 'López', 28);
INSERT INTO personas (nombre, apellido, edad) VALUES ('María', 'Martínez', 35);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Luis', 'Sánchez', 22);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Laura', 'Rodríguez', 40);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Carlos', 'Fernández', 32);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Sofía', 'Díaz', 29);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Miguel', 'Hernández', 27);
INSERT INTO personas (nombre, apellido, edad) VALUES ('Elena', 'Pérez', 31);

