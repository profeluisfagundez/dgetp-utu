<?php
//Iniciamos la sesión
//OBLIGATORIA para todos los archivos que dependan de un usuario
session_start();
//Cargamos el arreglo con los datos
$_SESSION['username'] = 'lfagundez';
$_SESSION['role'] = 'administrativo';
$_SESSION['password'] = password_hash('1234adm', PASSWORD_BCRYPT);
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