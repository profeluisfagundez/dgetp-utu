<?php
session_start();
require_once 'config.php';

// Función para comprobar si un usuario existe en el arreglo
function existeUsuario($username, $password) {
    foreach ($_SESSION['users'] as $user) {
        if ($user['user'] === $username && $user['password'] === $password) {
            return true;
        }
    }
    return false;
}

// Función para agregar un trabajador al arreglo global
function agregarTrabajador($nombre, $posicion, $email) {
    $_SESSION['trabajadores'][] = [
        'nombre' => $nombre,
        'posicion' => $posicion,
        'email' => $email
    ];
}
// USUARIO -> los usuarios que uso para iniciar sesión 
// TRABAJADOR -> Las personas cargadas en el sistema
// 1 - Función para buscar un trabajador con su CI y mostrar sus datos.
// 2 - Función para eliminar un usuario y mostrar los que quedan.
// 3 - Función para eliminar un trabajador
// 4 - Crear un arreglo global llamado administrador con 3 usuarios.
// 5 - Crear un arreglo de respaldo que tome los datos de trabajadores.
// 6 - Crear una función llamada enviarEmail() que nos lleve a un html con un mensaje.
// 7 - Función para mostrar los usuarios del sistema
// 8 - Programar la función de contacto para simular un envio
// 9 - Crear un archivo .php que llame a una función llamada explicarMétodos() que nos 
// devuelva para que sirvene las funciones del archivo funciones.php 
// 10 - Agregar al menú principal la función editar usuario y programarla.

// Función para cerrar sesión
function logout() {
    session_start();
    session_destroy();
    header("Location: ../index.html");
    exit();
}
?>
