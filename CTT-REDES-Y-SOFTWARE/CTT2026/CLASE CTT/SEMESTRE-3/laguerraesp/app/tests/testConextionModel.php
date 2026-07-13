<?php
require_once '../models/ConexionModel.php';

//Tener una conexión a la base de datos única para todo el proyecto.
$conexion = ConexionModel::getInstancia()->getConexion();
?>