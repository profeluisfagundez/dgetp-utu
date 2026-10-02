<?php
require_once('Vehiculo.php');
require_once('Coche.php');

// Crear una instancia de la clase Coche
$miCoche = new Coche("Toyota", "Corolla", 4);
$vehiculo = new Vehiculo("Toyota", "Corolla");

// Acceder a un método de la clase base
//echo $miCoche->getInformacion();  // Imprime: Marca: Toyota, Modelo: Corolla

// Acceder a un método de la clase derivada
//echo $miCoche->getNumeroPuertas();  // Imprime: 4

echo $miCoche->getInformacion();  // Imprime: Toyota
echo $miCoche->getInformacion();  // Imprime: Toyota
echo "<br>";
