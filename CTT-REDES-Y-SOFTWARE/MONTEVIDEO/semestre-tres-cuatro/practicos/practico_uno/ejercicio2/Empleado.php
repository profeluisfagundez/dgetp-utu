<?php
class Empleado extends Persona {
    private float $salario;

    public function __construct(string $nombre, int $edad, float $salario) {
        parent::__construct($nombre, $edad);
        $this->salario = $salario;
    }

    public function getSalario(): float {
        return $this->salario;
    }

    public function setSalario(float $salario): void {
        $this->salario = $salario;
    }

    public function mostrarInformacion(): void {
        echo "Nombre: " . $this->getNombre() . "<br>";
        echo "Edad: " . $this->getEdad() . "<br>";
        echo "Salario: $" . $this->getSalario();
    }
}

$empleado = new Empleado("Ana Gómez", 28, 2500);
$empleado->mostrarInformacion();
?>
