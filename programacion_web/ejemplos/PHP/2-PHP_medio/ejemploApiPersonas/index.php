<?php

require_once 'Database.php'; // Nueva clase para la gestión de la base de datos
require_once 'PersonasController.php'; // Nueva clase para el controlador de personas

// Inicializar la base de datos
$db = new Database("localhost", "root", "", "apipersonas");

// Inicializar el controlador de personas
$personasController = new PersonasController($db);

// Definir las rutas de la API
$request_method = $_SERVER["REQUEST_METHOD"];
$request_uri = $_SERVER["REQUEST_URI"];

// Obtener la parte de la URL después del nombre de archivo
$uri = parse_url($request_uri, PHP_URL_PATH);
$uri_segments = explode('/', $uri);

if ($uri_segments[1] == "personas") {
    $personasController->handleRequest($request_method, $uri_segments);
} else {
    header("HTTP/1.1 404 Not Found");
    exit;
}
