<?php

include("../app/config.php");

if(!isset($_SESSION["usuarioLogueado"]))
{
    header("Location: ../index.php");
    exit();
}

if($_SESSION["usuarioLogueado"]["tipo"] != "administrador")
{
    header("Location: ../index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="menu">
        <h1>Panel Administrador</h1>
        <h2>
            Bienvenido
            <?php
                echo $_SESSION["usuarioLogueado"]["nombre"] . " " .
                     $_SESSION["usuarioLogueado"]["apellido"];
            ?>
        </h2>
        <ul>
            <li>
                <a href="modificarPerfil.php">
                    Modificar Perfil
                </a>
            </li>
            <li>
                <a href="cargarAuto.php">
                    Cargar Automóvil
                </a>
            </li>
            <li>
                <a href="listarAutos.php">
                    Listar Automóviles
                </a>
            </li>
            <li>
                <a href="../app/logout.php">
                    Cerrar Sesión
                </a>
            </li>
        </ul>
    </div>
</body>
</html>