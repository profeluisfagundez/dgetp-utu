<?php
require_once('Persona.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $persona = new Persona($nombre, $apellido, $edad);
    echo $persona->mostrarInformacion();
}