<?php
require_once("Biblioteca.php");
session_start();

if (isset($_SESSION['biblioteca'])) {
    echo "<p>Biblioteca cargada correctamente.</p>";
    echo $_SESSION['biblioteca']->listarLibros();
} else {
    echo "<p>Aún no hay libros en la aplicación</p>";
}
?>