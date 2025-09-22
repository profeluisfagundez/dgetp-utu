<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>

<body>
    <?php
        require_once '../app/funciones.php';
        verificarSesion();
    ?>
    <h1>Página principal del Proyecto</h1>
    <header>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="../app/verTrabajadores.php">Ver Trabajadores</a></li>
                <li><a href="cargarTrabajador.php">Cargar Trabajador</a></li>
                <li><a href="../app/logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>
</body>

</html>