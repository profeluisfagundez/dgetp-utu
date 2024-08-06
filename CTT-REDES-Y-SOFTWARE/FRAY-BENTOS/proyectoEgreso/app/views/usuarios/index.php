<?php
session_start();
require_once("../../controllers/LoginController.php");
$loginController = new LoginController();
$loginController->checkUserLoggedIn();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de administración de usuarios</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']['username']; ?></h1>
    <p>Esta es una página protegida solo accesible para usuarios registrados.</p>
</body>
</html>
