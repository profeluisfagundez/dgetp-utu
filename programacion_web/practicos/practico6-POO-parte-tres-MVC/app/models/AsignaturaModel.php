<?php

class MateriaModel {
    private $nombre;
    private $nota;

    public function __construct($nombre, $nota) {
        $this->nombre = $nombre;
        $this->nota = $nota;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }
}

?>
