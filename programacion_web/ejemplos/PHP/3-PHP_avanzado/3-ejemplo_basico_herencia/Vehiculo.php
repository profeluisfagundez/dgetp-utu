<?php
// Clase base (superclase)
class Vehiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function obtenerInformacion() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }
}
