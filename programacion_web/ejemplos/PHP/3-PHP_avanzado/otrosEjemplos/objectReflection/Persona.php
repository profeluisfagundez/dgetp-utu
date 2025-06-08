<?php
class Persona {
  public $nombre;
  public $edad;
  public $profesion;

  public function __construct($nombre, $edad, $profesion) {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->profesion = $profesion;
  }

  public function obtenerNombre() {
    return $this->nombre;
  }

  public function obtenerEdad() {
    return $this->edad;
  }

  public function obtenerProfesion() {
    return $this->profesion;
  }
}
?>