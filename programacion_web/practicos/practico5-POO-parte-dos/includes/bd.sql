-- Tabla: estudiantes
CREATE DATABASE gestorEstudiantes;
use gestorEstudiantes;

CREATE TABLE estudiantes (
    ci_estudiante VARCHAR(20) PRIMARY KEY,
    nombre VARCHAR(50),
    apellido VARCHAR(50),
    fecha_nacimiento DATE,
    curso VARCHAR(50)
);

-- Tabla: asignaturas
CREATE TABLE asignaturas (
    id_asignatura INT PRIMARY KEY AUTO_INCREMENT,
    nombre_asignatura VARCHAR(100)
);

-- Tabla: estudiantes_asignaturas
CREATE TABLE estudiantes_asignaturas (
    id_relacion INT PRIMARY KEY AUTO_INCREMENT,
    ci_estudiante VARCHAR(20),
    id_asignatura INT,
    nota DECIMAL(3, 2),
    FOREIGN KEY (ci_estudiante) REFERENCES estudiantes(ci_estudiante),
    FOREIGN KEY (id_asignatura) REFERENCES asignaturas(id_asignatura)
);
