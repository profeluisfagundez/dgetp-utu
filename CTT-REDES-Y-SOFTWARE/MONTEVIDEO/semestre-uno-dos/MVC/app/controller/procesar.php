<?php
//require_once('../controller/TrabajadorController.php');
require_once('../controller/config.php');

//$trabajador = new TrabajadorController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //$encontrado = false;
    $variable = $_POST['formulario'] ?? '';
    $user = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($variable == 'iniciar') {
        foreach ($_SESSION['users'] as $u) {
            if ($u['user'] === $user && password_verify($password, $u['password'])) {
                $_SESSION['user_role'] = 'trabajador';
                $_SESSION['username'] = $user;
                header('Location: ../views/dashboard/inicio.html');
                //exit();
            } else {
                echo "<p style='color:red;'>No se encontró el usuario o contraseña incorrecta</p>";
                //exit();
            }
        }
        exit();
    }
    if ($variable == 'agregar') {
        //Acá vamos a mostrar la vista de agregar usaurio
        exit;
    }
    if ($variable == 'verTodos') {
        //Acá vamos a mostrar la vista de ver todos los trabajadores
        exit;
    }
    if ($variable == 'verTrabajador') {
        //Acá vamos a mostrar la vista de ver un solo trabajador
        exit;
    }
    if ($variable == 'borrarTrabajador') {
        //Acá vamos a mostrar la vista de borrar un trabajador
        exit;
    }
    if ($variable == 'salir') {
        //Acá vamos a mostrar la vista de salida, por lo general no se usa, pero lo dejamos por ahora
        exit;
    }
}
