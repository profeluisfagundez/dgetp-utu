<?php
abstract class Animal {
    private String $nombre;
    
    public function __construct(String $nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(String $value){
        $this->nombre = $value;
    }
    
    abstract public function sonido();
}
?>