<?php
class Persona {
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function mostrarInformacion() {
        return "<p>Nombre: $this->nombre</p>
                <p>Apellido: $this->apellido</p>
                <p>Edad: $this->edad años</p>";
    }
}
?>
