<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro de Estudiantes</title>
</head>

<body>
    <header>
        <h1>Bienvenido al Registro de Estudiantes</h1>
        <p>Visitas: <?php echo $contadorVisitas; ?></p>
    </header>

    <nav>
        <!-- Barra de navegación o menú -->
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Listar Estudiantes</a></li>
            <li><a href="#">Registrar Estudiante</a></li>
            <li><a href="#">Editar Estudiante</a></li>
            <li><a href="#">Dar de Baja Estudiante</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <?php echo $content; ?>
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>

</html>