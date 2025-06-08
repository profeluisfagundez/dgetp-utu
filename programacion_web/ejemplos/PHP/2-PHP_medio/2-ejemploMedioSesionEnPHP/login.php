<?php
session_start();
require_once 'config.php';

// Función para comprobar si un usuario existe en el arreglo
// Esta función la usaremos a futuro para buscar si un usuario existe en la BD
function existeUsuario($username, $password) {
    foreach ($_SESSION['users'] as $user) {
        if ($user['user'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}

// $_SERVER["REQUEST_METHOD"] Me permite chequear si la petición se hizo por POST o GET
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars me permite sanitizar los datos que envia el usuario
    // https://www.php.net/manual/en/function.htmlspecialchars.php
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
