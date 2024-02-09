<?php

namespace App\Classes;
class GatoAdoptado {

    private $name;
    private $edadAdopcion;
    private $adoptadoPor;

    function __construct($name, $edadAdopcion, $adoptadoPor) {
        $this->name = $name;
        $this->edadAdopcion = $edadAdopcion;
        $this->adoptadoPor = $adoptadoPor;
    }
    
    public function getName() {
        return $this->name;
    }

    public function getEdadAdopcion() {
        return $this->edadAdopcion;
    }

    public function getAdoptadoPor() {
        return $this->adoptadoPor;
    }

    public function maullar() {
        return "Meow!, soy un gatito adoptado llamado:".$this->getName()." y fui adoptado hace: ".$this->getEdadAdopcion()." por el humano llamado: ".$this->getAdoptadoPor();
    }

}