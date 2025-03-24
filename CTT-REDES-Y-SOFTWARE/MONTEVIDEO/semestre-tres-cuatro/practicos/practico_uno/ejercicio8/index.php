<?php

require_once 'CuentaBancariaExcepciones.php';

try {
    $cuenta = new CuentaBancariaExcepciones("Laura Pérez", 800);
    $cuenta->retirar(1000);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}