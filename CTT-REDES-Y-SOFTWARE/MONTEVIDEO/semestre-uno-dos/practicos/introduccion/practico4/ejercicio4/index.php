<?php

$numeros = [12, 5, 8, 21, 3, 15, 7];

echo "Arreglo original:<br>";
foreach ($numeros as $num) {
    echo $num . " ";
}

echo "<br><br>";

$ascendente = $numeros; 
sort($ascendente);

echo "Orden ascendente:<br>";
foreach ($ascendente as $num) {
    echo $num . " ";
}

echo "<br><br>";

$descendente = $numeros;
rsort($descendente);

echo "Orden descendente:<br>";
foreach ($descendente as $num) {
    echo $num . " ";
}

?>