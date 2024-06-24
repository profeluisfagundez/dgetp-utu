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

function logout(){
    session_start();
    session_destroy();
    header("Location: ../index.html");
}

?>