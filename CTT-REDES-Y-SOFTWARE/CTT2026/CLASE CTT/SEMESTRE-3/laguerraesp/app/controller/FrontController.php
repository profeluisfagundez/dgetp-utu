<?php
require_once("LoginController.php"); 
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $type = $_POST['type'];
    if ($type === 'login') {
        $nombre = $_POST['nombre'];
        $contra = $_POST['contra'];
        $login = new LoginController();
        $login->login($nombre, $contra);
    }
    elseif ($type === 'contact') {
        //Datos que vienen para enviar por el formulario de contacto
    }
    else {
        echo "Tipo de operación no válido";
    }
}

?>