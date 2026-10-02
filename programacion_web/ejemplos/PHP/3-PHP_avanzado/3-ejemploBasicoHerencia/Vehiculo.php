<?php
// Clase base (superclase)
class Vehiculo {
    //Atributos
    //Alcance Público, protegido, privado
    protected String $marca; //Permite ser visualizado a través de las clases que hereden vehículo
    protected String $modelo;

    //Constructor
    public function __construct(String $marca, String $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    //Métodos / Comportamientos
    public function getInformacion():String {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}";
    }

    public function getMarca():String {
        return $this->marca;
    }

    public function getModelo():String {
        return $this->modelo;
    }

}
