<?php

$numeros = range(1, 10);

$invertido = array_reverse($numeros);

echo "Arreglo invertido:<br>";

foreach ($invertido as $num) {
    echo $num . " ";
}

?>