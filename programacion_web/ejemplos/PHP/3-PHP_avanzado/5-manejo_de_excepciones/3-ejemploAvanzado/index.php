<?php
require_once('Divisor.php');
$objDivisor = new Divisor();
try {
    $resultado = $objDivisor->dividir(10, 0);
    echo $resultado . "\n";
} catch (Excepciones $e) {
    echo "Error (Código: " . $e->getErrorCode() . "): " . $e->getMessage() . "\n";
    // Se podria implementar los datos adicionales y mostrarlos en pantalla
    // haciendo una instancia de $additionalData = $e->getAdditionalData();
}
?>