<?php

require_once 'Database.php';
require_once 'PersonasController.php';

$db = new Database("localhost", "root", "root", "apipersonas");
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
