<?php
require_once '../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Controller\ArreglosController;

$loader = new FilesystemLoader('../templates');
$twig = new Environment($loader);

$controller = new ArreglosController($twig);
$controller->mostrarArreglo();

?>