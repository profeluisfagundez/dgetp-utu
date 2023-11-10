<?php
require_once('Vehiculo.php');
require_once('Coche.php');

// Crear una instancia de la clase Coche
$miCoche = new Coche("Toyota", "Corolla", 4);

// Acceder a un método de la clase base
echo $miCoche->obtenerInformacion();  // Imprime: Marca: Toyota, Modelo: Corolla

// Acceder a un método de la clase derivada
echo $miCoche->obtenerNumeroPuertas();  // Imprime: 4
