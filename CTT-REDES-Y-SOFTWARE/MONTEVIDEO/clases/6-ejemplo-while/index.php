<?php

echo "<h1>Vamos a trabajar con la estructura while</h1>";
$condicion = 20;

echo "<h2>Estructura while</h2>";
while ($condicion < 25) {
    echo "El valor de $condicion es: $condicion <br>";
    $condicion++;
}
echo "<h2>Estructura Do While</h2>";
do {
    echo "El valor de $condicion es: $condicion <br>";
}while ($condicion < 25);

?>