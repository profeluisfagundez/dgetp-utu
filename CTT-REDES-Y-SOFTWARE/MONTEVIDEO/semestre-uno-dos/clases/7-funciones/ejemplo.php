<?php
$primerValor = 20;
$segundoValor = 20;

echo "<h1>Funciones en PHP</h1>";

// Funciones y procedimientos
function sumar(int $a, int $b):int {
    $suma = $a + $b;
    return $suma; //return es para devolver un valor, es decir, el resultado de la función
};

function resta(int $a, int $b):int {
    $suma = $a - $b;
    return $suma;
};

function division(int $a, int $b):int {
    $suma = $a / $b;
    return $suma;
};

function multiplicar(int $a, int $b):int {
    $suma = $a * $b;
    return $suma;
};

//Procedimientos 
function mostrarMenu() {
    echo "<h2>Menú de opciones</h2>";
    echo "<ul>";
    echo "<li>1. Sumar</li>";
    echo "<li>2. Restar</li>";
    echo "<li>3. Dividir</li>";
    echo "<li>4. Multiplicar</li>";
    echo "</ul>";
};

mostrarMenu();
