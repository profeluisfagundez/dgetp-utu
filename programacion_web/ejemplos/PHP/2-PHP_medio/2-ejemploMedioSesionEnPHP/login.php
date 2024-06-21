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
    $inputUser = htmlspecialchars($_POST['username']);
    $inputPassword = htmlspecialchars($_POST['password']);

    if (existeUsuario($inputUser, $inputPassword)) {
        header("Location: principal.html");
        exit();
    } else {
        header("Location: index.html?error=1");
        exit();
    }
}
?>
