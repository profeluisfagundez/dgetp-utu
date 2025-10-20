<?php
session_start();

// Solo crear usuarios si no existen, sino tabla
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [
        ['user' => 'luis', 'password' => password_hash('1234', PASSWORD_DEFAULT)],
        ['user' => 'eduardo', 'password' => password_hash('12345', PASSWORD_DEFAULT)],
        ['user' => 'mateo', 'password' => password_hash('123456', PASSWORD_DEFAULT)],
        ['user' => 'maria', 'password' => password_hash('1234567', PASSWORD_DEFAULT)],
        ['user' => 'gonzalo', 'password' => password_hash('12345678', PASSWORD_DEFAULT)],
        ['user' => 'pedro', 'password' => password_hash('123456789', PASSWORD_DEFAULT)],
        ['user' => 'josefina', 'password' => password_hash('1234567890', PASSWORD_DEFAULT)],
        ['user' => 'guillermo', 'password' => password_hash('12345678901', PASSWORD_DEFAULT)],
        ['user' => 'sergio', 'password' => password_hash('123456789012', PASSWORD_DEFAULT)],
        ['user' => 'rodrigo', 'password' => password_hash('1234567890123', PASSWORD_DEFAULT)]
    ];
}

if (!isset($_SESSION['trabajadores'])) {
    $_SESSION['trabajadores'] = [];
}
?>
