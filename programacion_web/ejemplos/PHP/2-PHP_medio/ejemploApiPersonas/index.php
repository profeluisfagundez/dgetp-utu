<?php

require_once 'Database.php';
require_once 'PersonasController.php';

// Configura los encabezados CORS para permitir solicitudes desde localhost:3000
header("Access-Control-Allow-Origin: http://localhost:3000/");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");


$db = new Database("localhost", "root", "", "apipersonas");
$personasController = new PersonasController($db);

$request_method = $_SERVER["REQUEST_METHOD"];
$request_uri = $_SERVER["REQUEST_URI"];

$uri = parse_url($request_uri, PHP_URL_PATH);
$uri_segments = explode('/', $uri);

if (isset($uri_segments[1]) && $uri_segments[1] == "personas") {
    $personasController->handleRequest($request_method, $uri_segments);
} else {
    header("HTTP/1.1 404 Not Found");
    exit;
}
