<?php
session_start();

$page = $_GET['page'] ?? 'login';

switch ($page) {

  case 'login':
    // Si ya está logueado redirige al dashboard inmediatamente, es una buena práctica "en teoría"
    if (isset($_SESSION['user'])) {
      header('Location: index.php?page=dashboard');
      exit;
    }

    // Controlador que carga la vista de login,
    require_once '../app/Controllers/AuthController.php';
    $controller = new AuthController();
    $controller->showLoginForm();
    break;

  case 'dashboard':
    // Verificar si hay sesión iniciada
    //Más adelante realizaremos un chequeo más especifico
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
    // Muestra el panel principal de la página web
    require_once __DIR__ . '../../app/Views/Dashboard/panel.php';
    break;

  case 'configurar':
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
    echo "<h2>Configuración de partida (en desarrollo)</h2>";
    break;

  case 'seguimiento':
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
    echo "<h2>Seguimiento de partida (en desarrollo)</h2>";
    break;

  case 'perfil':
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
    echo "<h2>Perfil del jugador (en desarrollo)</h2>";
    break;

  case 'ranking':
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
    echo "<h2>Ranking de los mejores jugadores (en desarrollo)</h2>";
    break;

  case 'logout':
    session_destroy();
    header('Location: index.php?page=login');
    break;

  default:
    http_response_code(404);
    echo "<h1>Página no encontrada</h1>";
    break;
}
