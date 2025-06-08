<?php
session_start();
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUser = htmlspecialchars($_POST['username']);
    $inputPassword = htmlspecialchars($_POST['password']);
    if (existeUsuario($inputUser, $inputPassword)) {
        header("Location: ../html/principal.html");
        exit();
    } else {
        header("Location: ../index.html?error=1");
        exit();
    }
}
?>
