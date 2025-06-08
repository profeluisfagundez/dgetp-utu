<?php
session_start();

// Declarar el arreglo asociativo con múltiples usuarios
$_SESSION['users'] = [
    ['user' => 'luis', 'password' => '1234'],
    ['user' => 'eduardo', 'password' => '12345'],
    ['user' => 'mateo', 'password' => '123456'],
    ['user' => 'maria', 'password' => '1234567'],
    ['user' => 'gonzalo', 'password' => '12345678'],
    ['user' => 'pedro', 'password' => '123456789'],
    ['user' => 'josefina', 'password' => '1234567890'],
    ['user' => 'guillermo', 'password' => '12345678901'],
    ['user' => 'sergio', 'password' => '123456789012'],
    ['user' => 'rodrigo', 'password' => '1234567890123']
];
//echo "<pre>";
//var_dump($_SESSION['users']);
//echo "</pre>";
?>
