<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function mostrarInformacion() {
        return "<p>Nombre: $this->nombre</p>
                <p>Apellido: $this->apellido</p>
                <p>Edad: $this->edad años</p>";
    }
}
?>
