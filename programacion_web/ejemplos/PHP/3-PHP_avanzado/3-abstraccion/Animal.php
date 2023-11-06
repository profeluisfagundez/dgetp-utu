<?php
abstract class Animal {
    protected $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    abstract public function sonido();
}
?>