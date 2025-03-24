<?php

require_once 'Circulo.php';
require_once 'Rectangulo.php';  

$rectangulo = new Rectangulo("Rectángulo", 5, 10);
echo $rectangulo->getNombre() . " tiene un área de: " . $rectangulo->calcularArea();

$circulo = new Circulo("Círculo", 7);
echo "<br>" . $circulo->getNombre() . " tiene un área de: " . $circulo->calcularArea();