<?php
require_once("Vehiculo.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $año = $_POST['año'];
    $kilometraje = $_POST['kilometraje'];
    $nuevoKilometraje = $_POST['nuevoKilometraje'];

    $vehiculo = new Vehiculo($marca, $modelo, $año, $kilometraje);
    $vehiculo->actualizarKilometraje($nuevoKilometraje);

    echo $vehiculo->mostrarInformacion();
}