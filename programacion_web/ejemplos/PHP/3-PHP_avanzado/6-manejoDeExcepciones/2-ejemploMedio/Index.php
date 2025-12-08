<?php
require_once('Excepciones.php');

function dividir($a, $b) {
    if ($b === 0) {
        throw new Excepciones("No se puede dividir entre cero", true);
    }
    $result = $a / $b;
    return $result;
}

try {
    $resultado = dividir(10, 2);
    echo $resultado . "\n";
} catch (Excepciones $e) {
    echo $e->getMessage() . "\n";
}
?>
