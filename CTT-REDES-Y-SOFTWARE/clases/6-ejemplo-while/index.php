<?php

echo "<h1>Vamos a trabajar con la estructura while</h1>";
$condicion = 10;

echo "<h2>Con while</h2>";
while ($condicion < 25) {
    echo "El valor de la condición es: $condicion <br>";
    $condicion++;
}
echo "<br>";
echo "<h2>Con Do While</h2>";
do {
    echo "El valor de la condición es: $condicion";
} while ($condicion < 25);

?>