<?php
session_start();
require_once('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Verificación de los trabajadores registrados en config.php por ahora al no tener BD
    foreach ($_SESSION['users'] as $u) {
        if ($u['user'] === $user && password_verify($password, $u['password'])) {
            $_SESSION['user_role'] = 'trabajador';
            $_SESSION['username'] = $user;
            require_once('../views/dashboard/inicio.php');
            exit();
        }
    }

    //Si no coincide con ningún usuario, pa afuera jjaja
    header("Location: ../../public/index.html");
    exit();
}
else {
    header("Location: ../../public/index.html");
    exit();
}
?>
