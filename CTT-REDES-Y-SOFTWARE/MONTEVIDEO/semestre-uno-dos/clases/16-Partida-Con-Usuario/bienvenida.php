<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['IDUsuario'])) {
    header("Location: index.html");
    exit();
}

// Mostrar un mensaje de bienvenida
echo "<h3>Bienvenido, usuario con ID: " . $_SESSION['IDUsuario'] . "</h3>";
echo "<p>Comenzar partida</p>"
?>

<a href="cerrarSesion.php">Cerrar Sesión</a>
