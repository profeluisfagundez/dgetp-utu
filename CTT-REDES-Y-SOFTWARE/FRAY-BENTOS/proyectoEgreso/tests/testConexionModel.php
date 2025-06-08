<?php
require_once("../app/models/ConexionModel.php");

$conn = ConexionModel::getInstance()->getDatabaseInstance();
//Preparamos la consulta
$query = $conn->prepare("SELECT * FROM usuarios;");
//La ejecutamos
$query->execute();
//Obtenemos los resultados
$resultados = $query->fetchAll();

foreach ($resultados as $resultado) {
    echo $resultado['id'] . " ";
    echo $resultado['nombre_usuario'] . " ";
    echo $resultado['correo_electronico'] . " ";
    echo $resultado['contrasena'] . " ";
    echo $resultado['nombre_completo'] . " ";
    echo $resultado['fecha_nacimiento'] . " ";
    echo $resultado['numero_telefono'] . " ";
    echo $resultado['creado_en'] . " ";
    echo $resultado['actualizado_en'] . " ";
    echo "<br>";
}
