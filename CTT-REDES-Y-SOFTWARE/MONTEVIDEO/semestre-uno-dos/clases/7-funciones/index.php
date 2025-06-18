<?php 
// (Funciones) y (Procedimientos) en PHP
 
//Función suma
function sumar(int $varUno,int $varDos):int {
    $valor = $varUno + $varDos;
    return $valor;
}

$suma = sumar(14,17);
echo $suma;


function mostrarHead(): void{
    echo "<head>";
    echo "<title>Nombre de la página web</title>";
    echo "<p>Esto es un texto</p>";
    echo "</head>";
}

mostrarHead();

