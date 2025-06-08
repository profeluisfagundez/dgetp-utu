<?php

require_once "Persona.php";

class EmpleadoEncapsulado extends Persona {
    private float $salario;

    public function __construct(string $nombre, int $edad, float $salario) {
        parent::__construct($nombre, $edad);
        $this->setSalario($salario);
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {
        if ($salario < 0) {
            throw new Exception("El salario no puede ser negativo.");
        }
        $this->salario = $salario;
    }
}

try {
    $empleado = new EmpleadoEncapsulado("Luis Romero", 40, -1500);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
