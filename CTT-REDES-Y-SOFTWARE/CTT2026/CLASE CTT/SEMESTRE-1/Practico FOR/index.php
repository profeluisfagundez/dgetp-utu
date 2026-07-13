<?php

// 1. Imprimir los números pares del 1 al 20
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . "<br>";
}

echo "<hr>";

// 2. Imprimir una secuencia de números inversa del 10 al 1
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}

echo "<hr>";

// 3. Calcular la suma de los primeros 10 números naturales
$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $suma += $i;
}

echo "La suma es: " . $suma . "<br>";

echo "<hr>";

// 4. Imprimir la tabla de multiplicar del 5
for ($i = 1; $i <= 10; $i++) {
    echo "5 x $i = " . (5 * $i) . "<br>";
}

echo "<hr>";

// 5. Imprimir una secuencia de letras del abecedario de la A a la Z
for ($i = 65; $i <= 90; $i++) {
    echo chr($i) . "<br>";
}

?>
