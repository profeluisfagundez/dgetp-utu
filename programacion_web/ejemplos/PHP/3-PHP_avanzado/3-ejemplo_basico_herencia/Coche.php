<?php
// Clase derivada (subclase)
class Coche extends Vehiculo {
    private $numeroPuertas;

    public function __construct($marca, $modelo, $numeroPuertas) {
        // Llamamos al constructor de la clase base para inicializar la marca y el modelo
        parent::__construct($marca, $modelo);
        
        // Inicializamos el atributo específico de la clase Coche
        $this->numeroPuertas = $numeroPuertas;
    }

    // Agregamos un método específico de la clase Coche
    public function obtenerNumeroPuertas() {
        return $this->numeroPuertas;
    }
}