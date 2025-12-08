<?php

class Empleado {
    private $nombre;
    private $horasTrabajadas;
    private $tarifaHora;

    public function __construct($nombre, $horasTrabajadas = 0, $tarifaHora = 0) {
        $this->nombre = $nombre;
        $this->horasTrabajadas = $horasTrabajadas;
        $this->tarifaHora = $tarifaHora;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getHorasTrabajadas() {
        return $this->horasTrabajadas;
    }

    public function setHorasTrabajadas($horasTrabajadas) {
        $this->horasTrabajadas = $horasTrabajadas;
    }

    public function getTarifaHora() {
        return $this->tarifaHora;
    }

    public function setTarifaHora($tarifaHora) {
        $this->tarifaHora = $tarifaHora;
    }

    /*public function calcularSalario() {
        $salario = $this->horasTrabajadas * $this->tarifaHora;
        if ($this->horasTrabajadas > 40) {
            //$salario += ($this->horasTrabajadas - 40) * ($this->tarifaHora * 0.5);
        }
        return $salario;
    }*/

    public function calcularSalario() {
        // Calcular el salario base
        $salario = $this->horasTrabajadas * $this->tarifaHora;
        // Verificar si hay horas extras
        if ($this->horasTrabajadas > 40) {
            $horasExtras = $this->horasTrabajadas - 40;  // Calcular las horas extra
            $bonoPorHoraExtra = $this->tarifaHora * 0.5;  // Calcular el bono por hora extra
            $bonoTotal = $horasExtras * $bonoPorHoraExtra;  // Calcular el bono total por horas extra
            $salario += $bonoTotal;  // Sumar el bono total al salario base
        }
    
        return $salario;  // Devolver el salario total
    }
    
}

?>
