<?php
session_start();
require_once 'config.php';
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $posicion = htmlspecialchars($_POST['posicion']);
    $email = htmlspecialchars($_POST['email']);
    agregarTrabajador($nombre, $posicion, $email);
    header("Location: ../views/principal.php");
    exit();
}
?>
