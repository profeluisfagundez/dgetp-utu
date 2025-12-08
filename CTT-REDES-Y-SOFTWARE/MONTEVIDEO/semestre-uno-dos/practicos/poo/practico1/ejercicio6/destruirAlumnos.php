<?php
session_start();

// Eliminar todos los alumnos de la sesión
unset($_SESSION['alumnos']);

// Redirigir de vuelta a index.php
header('Location: index.php');
exit();
?>
