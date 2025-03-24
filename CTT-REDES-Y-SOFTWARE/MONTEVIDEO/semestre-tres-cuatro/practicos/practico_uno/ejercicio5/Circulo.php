<?php

require_once 'Figura.php';

class Circulo extends Figura {
    private float $radio;

    public function __construct(string $nombre, float $radio) {
        parent::__construct($nombre);
        $this->radio = $radio;
    }

    public function calcularArea(): float {
        return pi() * pow($this->radio, 2);
    }
}