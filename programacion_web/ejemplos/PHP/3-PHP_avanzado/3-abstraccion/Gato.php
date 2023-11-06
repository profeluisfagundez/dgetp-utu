<?php
class Gato extends Animal {
    public function __construct($nombre) {
        parent::__construct($nombre);
    }

    public function sonido() {
        return "Miau";
    }
}
?>