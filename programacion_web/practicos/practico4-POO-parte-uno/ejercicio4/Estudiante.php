<?php
    class Estudiante extends Persona {
        private $carrera;

        public function __construct($nombre, $apellido, $carrera)
        {
            parent::__construct($nombre, $apellido);
            $this->carrera = $carrera;
        }

        public function getCarrera(): String {
            return $this->carrera;
        }

        public function setCarrera($value): void {
            $this->carrera = $value;
        }

        public function __toString(){
            return "Nombre: {$this->getNombre()}, Apellido: {$this->getApellido()} Carrera: {$this->carrera}";
        }

        public function estudioDelEstudiante():String {
            return "El estudiante que estudia";
        }
    }
?>
