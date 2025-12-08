<?php

require_once 'CuentaBancaria.php';

$cuenta = new CuentaBancaria("María López", 1000);
$cuenta->depositar(500);
echo "Saldo actual: " . $cuenta->getSaldo();