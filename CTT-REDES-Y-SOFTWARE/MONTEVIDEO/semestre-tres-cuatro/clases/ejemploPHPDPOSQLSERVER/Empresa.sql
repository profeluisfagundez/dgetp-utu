-- Crear base de datos
CREATE DATABASE Empresa;
GO

-- Usar la base de datos
USE Empresa;
GO

-- Crear tabla
CREATE TABLE Empleados (
    id INT PRIMARY KEY IDENTITY(1,1),
    nombre NVARCHAR(100),
    puesto NVARCHAR(100),
    salario DECIMAL(10,2)
);
GO