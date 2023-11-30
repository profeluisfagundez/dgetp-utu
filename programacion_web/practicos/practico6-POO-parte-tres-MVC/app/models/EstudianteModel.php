<?php

class EstudianteModel {
    private $ci;
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $curso;
    private $materias = []; // Arreglo asociativo con nombre de materia y nota

    /**
     * Constructor de la clase Estudiante.
     * @param string $ci Cédula de identidad.
     * @param string $nombre Nombre del estudiante.
     * @param string $apellido Apellido del estudiante.
     * @param string $fechaNacimiento Fecha de nacimiento del estudiante.
     * @param string $curso Curso del estudiante.
     */
    public function __construct($ci, $nombre, $apellido, $fechaNacimiento, $curso) {
        $this->ci = $ci;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->curso = $curso;
    }

        // Getter y Setter para $ci
        public function getCi() {
            return $this->ci;
        }
    
        public function setCi($ci) {
            $this->ci = $ci;
        }
    
        // Getter y Setter para $nombre
        public function getNombre() {
            return $this->nombre;
        }
    
        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }
    
        // Getter y Setter para $apellido
        public function getApellido() {
            return $this->apellido;
        }
    
        public function setApellido($apellido) {
            $this->apellido = $apellido;
        }
    
        // Getter y Setter para $fechaNacimiento
        public function getFechaNacimiento() {
            return $this->fechaNacimiento;
        }
    
        public function setFechaNacimiento($fechaNacimiento) {
            $this->fechaNacimiento = $fechaNacimiento;
        }
    
        // Getter y Setter para $curso
        public function getCurso() {
            return $this->curso;
        }
    
        public function setCurso($curso) {
            $this->curso = $curso;
        }
    
        // Getter y Setter para $materias
        public function getMaterias() {
            return $this->materias;
        }
    
        public function setMaterias($materias) {
            $this->materias = $materias;
        }

    /**
     * Agrega una materia al estudiante.
     *
     * @param string $nombreMateria Nombre de la materia.
     * @param float $nota Nota de la materia.
     * @throws Exception Si la materia ya existe para este estudiante.
     */
    public function agregarMateria($nombreMateria, $nota) {
        if (!isset($this->materias[$nombreMateria])) {
            $materia = new Materia($nombreMateria, $nota);
            $this->materias[$nombreMateria] = $materia;
        } else {
            // Lanzar una excepción si la materia ya existe
            throw new Exception("La materia '$nombreMateria' ya existe para este estudiante.");
        }
    }

}

?>