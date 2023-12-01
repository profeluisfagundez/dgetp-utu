<?php
require_once('Excepciones.php');
function dividir($a, $b) {
    try {
        if ($b === 0) {
            throw new Excepciones("No se puede dividir entre cero");
        }
        $result = $a / $b;
        return $result;
    } catch (Excepciones $e) {
        $e->handle();
    }
}
try {
    $resultado = dividir(10, 0);
    echo $resultado . "\n";
} catch (Excepciones $e) {
    echo $e->getMessage() . "\n";
}
?>