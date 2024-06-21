<?php
session_start();
include 'config.php';

// Función para comprobar si un usuario existe
function existeUsuario($username, $password) {
    foreach ($_SESSION['users'] as $user) {
        if ($user['user'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUser = $_POST['username'];
    $inputPassword = $_POST['password'];

    if (existeUsuario($inputUser, $inputPassword)) {
        echo "El usuario $inputUser existe.";
    } else {
        echo "El usuario $inputUser no existe o la contraseña es incorrecta.";
    }
}
?>
