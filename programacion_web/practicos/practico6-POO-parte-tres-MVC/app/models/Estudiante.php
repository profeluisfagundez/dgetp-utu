<?php

class Estudiante {
    public $ci;
    public $nombre;
    public $apellido;
    public $fechaNacimiento;
    public $curso;
    public $materias = []; // Arreglo asociativo con nombre de materia y nota

    public function __construct($ci, $nombre, $apellido, $fechaNacimiento, $curso) {
        $this->ci = $ci;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->curso = $curso;
    }

    public function agregarMateria($nombreMateria, $nota) {
        $materia = new Materia($nombreMateria, $nota);
        $this->materias[$nombreMateria] = $materia;
    }

}

?>