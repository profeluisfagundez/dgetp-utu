<?php
require_once("Biblioteca.php");
session_start();
if (!isset($_SESSION['biblioteca'])) {
    $_SESSION['biblioteca'] = new Biblioteca();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];

    $libro = new Libro($titulo, $autor, $precio);
    $_SESSION['biblioteca']->agregarLibro($libro);

    echo $_SESSION['biblioteca']->listarLibros();
}
?>