<?php

class Vehiculo {
    //Atributos
    //Alcance Público, protegido, privado
    protected $marca; //Permite ser visualizado a través de las clases que hereden vehículo
    protected $modelo;

    //Constructor
    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    //Métodos / Comportamientos
    public function getInformacion() {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }

}

class Coche extends Vehiculo {
    private $numeroPuertas;

    public function __construct($marca, $modelo, $numeroPuertas) {
        // Llamamos al constructor de la clase base para inicializar la marca y el modelo
        parent::__construct($marca, $modelo);
        // Inicializamos el atributo específico de la clase Coche
        $this->numeroPuertas = $numeroPuertas;
    }

    // Agregamos un método específico de la clase Coche
    public function getNumeroPuertas() {
        return $this->numeroPuertas;
    }
}

// Crear una instancia de la clase Coche
$miCoche = new Coche("Toyota", "Corolla", 4);

// Acceder a un método de la clase base
echo $miCoche->getInformacion();  // Imprime: Marca: Toyota, Modelo: Corolla

// Acceder a un método de la clase derivada
echo $miCoche->getNumeroPuertas();  // Imprime: 4