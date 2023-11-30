<?php

class Estudiante {
    public $ci;
    public $nombre;
    public $apellido;
    public $fechaNacimiento;
    public $curso;
    public $materias = []; // Arreglo asociativo con nombre de materia y nota

    /**
     * Constructor de la clase Estudiante.
     *
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
