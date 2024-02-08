<?php

namespace GatosDisponibles;

class Gato {
    // Propiedades
    private $nombre;
    private $color;
    private $edad;

    // Constructor
    public function __construct($nombre, $color, $edad) {
        $this->nombre = $nombre;
        $this->color = $color;
        $this->edad = $edad;
    }

    // Métodos
    public function getNombre() {
        return $this->nombre;
    }

    public function getColor() {
        return $this->color;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function maullar() {
        return "¡Miau! mi nombre es:" . $this->getNombre() . " Mi color es: " . $this->getColor(). " y tengo: " . $this->getEdad();
    }
}