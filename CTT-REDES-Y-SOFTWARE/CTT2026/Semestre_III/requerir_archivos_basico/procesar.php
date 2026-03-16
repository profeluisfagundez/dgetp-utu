<?php
require_once 'Usuario.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];
    $usuario = new Usuario($usuario, $contrasena);
    echo $usuario->__toString();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "Me niego a procesar la información por GET jaja salu2";
}
