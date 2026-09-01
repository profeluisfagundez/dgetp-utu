<?php
class Gato extends Animal {
    
    public function __construct(String $nombre) {
        parent::__construct($nombre);
    }

    public function sonido() {
        return "Miau";
    }
}
?>