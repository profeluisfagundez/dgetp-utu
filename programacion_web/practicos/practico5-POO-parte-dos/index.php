<?php
include 'includes/functions.php';

// Ruta al archivo que almacena la información de los estudiantes
$archivoEstudiantes = 'data/estudiantes.json';

// Cargar estudiantes desde el archivo
$estudiantes = cargarEstudiantesDesdeArchivo($archivoEstudiantes);

// Contador de visitas
$archivoContador = 'data/contadorVisitas.txt';
$contadorVisitas = contarVisitas($archivoContador);

?>

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
            <li><a href="listar_estudiantes.php">Listar Estudiantes</a></li>
            <li><a href="registro_estudiante.php">Registrar Estudiante</a></li>
            <li><a href="editar_estudiante.php">Editar Estudiante</a></li>
            <li><a href="dar_de_baja.php">Dar de Baja Estudiante</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <p>Seleccione una opción en el menú para comenzar.</p>
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
