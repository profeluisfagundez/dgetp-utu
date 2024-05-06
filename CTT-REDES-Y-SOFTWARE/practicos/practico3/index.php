<?php

//1 - Imprimir los números pares del 1 al 20:
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " ";
}

//2 - Imprimir una secuencia de números inversa del 10 al 1:
for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}

//3 - Calcular la suma de los primeros 10 números naturales:
$suma = 0;
for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}
echo "La suma de los primeros 10 números naturales es: " . $suma;

//4 - Imprimir la tabla de multiplicar del 5:
$numero = 5;
for ($i = 1; $i <= 10; $i++) {
    echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>";
}

//5 - Imprimir una secuencia de letras del abecedario de la 'A' a la 'Z':
for ($letra = 'A'; $letra <= 'Z'; $letra++) {
    echo $letra . " ";
}
