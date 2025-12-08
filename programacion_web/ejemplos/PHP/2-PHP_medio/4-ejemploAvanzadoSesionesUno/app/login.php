<?php
session_start();
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUser = htmlspecialchars($_POST['username']);
    $inputPassword = htmlspecialchars($_POST['password']);
    if (existeUsuario($inputUser, $inputPassword)) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $inputUser;
        header("Location: ../views/principal.php");
        exit();
    } else {
        header("Location: ../index.html?error=1");
        exit();
    }
}
?>
