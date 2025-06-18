<?php
session_start();

$page = $_GET['page'] ?? 'login';

switch ($page) {
  case 'login':
    require_once '../app/Controllers/AuthController.php';
    $controller = new AuthController();
    $controller->showLoginForm();
    break;

  case 'dashboard':
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
    echo "<h1>Bienvenido al panel, " . $_SESSION['user'] . "!</h1>";
    break;

  case 'logout':
    session_destroy();
    header('Location: index.php?page=login');
    break;

  default:
    http_response_code(404);
    echo "Página no encontrada";
}
