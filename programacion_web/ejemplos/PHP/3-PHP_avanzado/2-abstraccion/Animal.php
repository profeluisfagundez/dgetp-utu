<?php
abstract class Animal {
    private $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($value){
        $this->nombre = $value;
    }
    
    abstract public function sonido();
}
?>