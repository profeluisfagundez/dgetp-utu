<?php

require_once("Empleado.php");

class EmpleadoPolimorfismo extends Empleado {
    
    public function mostrarInformacion(): void {
        parent::mostrarInformacion();
        echo "<br>Posición en la empresa: Desarrollador.";
    }
}

$empleado = new EmpleadoPolimorfismo("Carlos Ruiz", 35, 3200);
$empleado->mostrarInformacion();
?>
