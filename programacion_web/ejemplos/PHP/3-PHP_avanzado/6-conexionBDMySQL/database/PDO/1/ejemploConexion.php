<?php

$server = "localhost";
$database = "finanzas";
$username = "root";
$password = "";

$conexion = new PDO("mysql:host=$server;dbname=$database", $username, $password);
$setnames = $conexion->prepare("SET NAMES 'utf8'");
$setnames->execute();
var_dump($setnames);

?>