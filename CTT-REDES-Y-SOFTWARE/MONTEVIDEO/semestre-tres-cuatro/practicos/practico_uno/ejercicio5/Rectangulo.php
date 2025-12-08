<?php

require_once 'Figura.php';

class Rectangulo extends Figura {
    private float $base;
    private float $altura;

    public function __construct(string $nombre, float $base, float $altura) {
        parent::__construct($nombre);
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(): float {
        return $this->base * $this->altura;
    }
}