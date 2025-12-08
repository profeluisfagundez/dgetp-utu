<?php
session_start();
require_once 'config.php';

//Comprobar si un usuario existe en el arreglo
function existeUsuario($username, $password) {
    foreach ($_SESSION['users'] as $user) {
        if ($user['user'] === $username && password_verify($password, $user['password'])) {
            return true;
        }
    }
    return false;
}

//Agregar un trabajador al arreglo global
function agregarTrabajador($nombre, $posicion, $email) {
    $_SESSION['trabajadores'][] = [
        'nombre' => htmlspecialchars($nombre),
        'posicion' => htmlspecialchars($posicion),
        'email' => htmlspecialchars($email)
    ];
}

//Cerrar sesión
function logout() {
    session_start();
    session_destroy();
    header("Location: ../index.html");
    exit();
}

//Verificar si el usuario está logueado
function verificarSesion() {
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header("Location: ../index.html");
        exit();
    }
}
?>
