CREATE DATABASE ejemplo_pdo;
USE ejemplo_pdo;
 
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    email VARCHAR(50),
    edad INT
);