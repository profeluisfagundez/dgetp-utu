<?php
require_once '../modelo/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];
    $usuario = new UsuarioModel($usuario, $contrasena);
    require_once '../vista/informacion.php';
}
