<?php
require __DIR__.'/../vendor/autoload.php';

use App\Controllers\AuthController;

$authController = new AuthController();
$response = $authController->handle2FA();

// Extrae los datos para que estén disponibles en las vistas
$data = $response['data'] ?? [];

require_once __DIR__.'/../app/Views/Layouts/header.php';
require_once __DIR__.'/../app/Views/'.$response['view'].'.php';
require_once __DIR__.'/../app/Views/Layouts/footer.php';