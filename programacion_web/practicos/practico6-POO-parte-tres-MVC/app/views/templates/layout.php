<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../public/css/style.css">
    <title>SGET - Sistema de Gestión de Estudiantes Terciarios</title>
</head>

<body>
    <header>
        <h1>BIENVENIDOS AL SGET - Sistema de Gestión de Estudiantes Terciarios</h1>
        <?php echo $nombreSeccion; ?>
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