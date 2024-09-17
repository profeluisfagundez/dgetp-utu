<?php
require_once("Carta2.php");
echo "<hr>";
// Crear una carta (palo 0 => 'o' y número 5)
$carta = new Carta2(0, 5);
echo $carta;  // Muestra <img src='imagenes/c_o_5.png' alt='Carta'>
echo "<hr>";

// Cambiar el número de la carta
$carta->setNumero(7);
echo $carta->getImagen(); // Devuelve 'imagenes/c_o_7.png'
echo "<hr>";
// Cambiar el palo de la carta (palo 1 => 'c')
$carta->setPalo(1);
echo $carta;  // Muestra <img src='imagenes/c_c_7.png' alt='Carta'>
echo "<hr>";

