<?php
// Clase base (superclase)
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

    public function saludoAFranca() {
        return "Hola Franca";
    }

}
