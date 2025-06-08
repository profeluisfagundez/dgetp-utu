<?php
class Alumno {
    private $nombre;
    private $notas;
    private $promedio;

    public function __construct($nombre) {
        $this->setNombre($nombre);
        $this->notas = [];
        $this->promedio = 0;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNotas() {
        return $this->notas;
    }

    public function setNotas($notas) {
        $this->notas = $notas;
        $this->calcularPromedio();
    }

    public function getPromedio() {
        return $this->promedio;
    }

    // Métodos
    public function agregarNota($nota) {
        $this->notas[] = $nota;
        $this->calcularPromedio();
    }

    private function calcularPromedio() {
        $totalNotas = count($this->notas);
        if ($totalNotas > 0) {
            $suma = array_sum($this->notas);
            $this->promedio = $suma / $totalNotas;
        } else {
            $this->promedio = 0;
        }
    }

    public function __toString() {
        return "<p>Nombre: " . $this->getNombre() . "</p>
                <p>Notas: " . implode(', ', $this->getNotas()) . "</p>
                <p>Promedio: " . $this->getPromedio() . "</p>";
    }
}
?>
