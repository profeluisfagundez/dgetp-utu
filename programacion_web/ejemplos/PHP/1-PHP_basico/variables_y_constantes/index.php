<?php
// Las variables en php se declaran con el simbolo de $

//Variables 
$entero = 12;
$cadena_de_texto = "nombre";
$caracter = "A";
echo "Valor del entero: ".$entero." \nValor de la cadena: ".$cadena_de_texto."<br>";

//Constantes
define('pi', 3.1415926535);
echo (pi)."<br>";

echo "<pre>";
var_dump(pi);
var_dump($entero);
var_dump($cadena_de_texto);
var_dump($caracter);
echo "</pre>";
?>
