<?php
session_start();
require_once 'funciones.php';

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
