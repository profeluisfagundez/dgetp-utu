<?php
class Pajaro extends Animal implements Volador {
    public function __construct(String $nombre) {
        parent::__construct($nombre);
    }

    public function sonido() {
        return "Canto de pájaro";
    }

    public function volar() {
        return "El pájaro está volando en el cielo.";
    }

    public function aterrizar() {
        return "El pájaro ha aterrizado en el suelo.";
    }
}