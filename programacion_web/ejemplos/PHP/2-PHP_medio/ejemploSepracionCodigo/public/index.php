<?php
require_once '../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

// Aquí puedes inicializar tu controlador y pasar los datos a la vista
$controller = new \Controller\ArreglosController($twig);
$controller->mostrarArreglo();

?>
