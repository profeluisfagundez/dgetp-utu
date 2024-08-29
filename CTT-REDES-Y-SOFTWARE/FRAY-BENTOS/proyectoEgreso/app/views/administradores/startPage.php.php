<?php
session_start();
require_once("../../controllers/LoginController.php");
LoginController::getInstance()->checkUserLoggedIn();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página princial del administrador</title>
</head>
<body>
    <h1>Bienvenido Administrador</h1>
</body>
</html>