<?php
//Iniciamos la sesión
session_start();
//Cargamos el arreglo con los datos
$_SESSION['username'] = 'admin';
$_SESSION['role'] = 'admin';
$_SESSION['password'] = 'admin';
//Accedemos a los datos para mostrarlos en pantalla
echo 'Username: ' . $_SESSION['username'] . "<br>";
echo 'Role: ' . $_SESSION['role'] . "<br>";
echo 'Password: ' . $_SESSION['password'] . "<br>";
// Eliminamos la sesión
echo "<pre>";
var_dump($_SESSION['username']);
echo "</pre>";
session_destroy();
?>