-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS trabajadores CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE trabajadores;

-- Crear la tabla trabajador
CREATE TABLE IF NOT EXISTS trabajador (
  ci VARCHAR(12) PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  direccion VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  celular VARCHAR(20) NOT NULL
);


INSERT INTO trabajador (ci, nombre, apellido, direccion, email, celular) VALUES
('12345678', 'Ana', 'Pérez', 'Calle 1', 'ana@example.com', '099111111'),
('87654321', 'Luis', 'Gómez', 'Calle 2', 'luis@example.com', '099222222');
