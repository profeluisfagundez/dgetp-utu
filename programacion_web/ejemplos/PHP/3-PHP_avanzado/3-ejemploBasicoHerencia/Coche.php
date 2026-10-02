<?php
// Clase derivada (subclase)
class Coche extends Vehiculo {
    private int $numeroPuertas;

    public function __construct(String $marca, String $modelo, int $numeroPuertas) {
        // Llamamos al constructor de la clase base para inicializar la marca y el modelo
        parent::__construct($marca, $modelo);
        // Inicializamos el atributo específico de la clase Coche
        $this->numeroPuertas = $numeroPuertas;
    }

    // Agregamos un método específico de la clase Coche
    public function getNumeroPuertas():int {
        return $this->numeroPuertas;
    }

    public function setNumeroPuertas(int $numeroPuertas):void {
        $this->numeroPuertas = $numeroPuertas;
    }

    public function getModelo():string {
        return $this->modelo;
    }

    public function getInfoImportante(): string {
        return $this->marca;
    }

    //Este método sobrescribe el método de la clase base para proporcionar información específica del coche
    public function getInformacion():String {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Número de puertas: {$this->numeroPuertas}";
    }


}