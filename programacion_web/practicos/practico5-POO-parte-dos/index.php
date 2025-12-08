<?php
include 'includes/functions.php';

// Ruta al archivo que almacena la información de los estudiantes
$archivoEstudiantes = 'data/estudiantes.json';

// Cargar estudiantes desde el archivo en formato JSON
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
            <li><a href="index.php">Inicio</a></li>
            <li><a href="listarEstudiantes.php">Listar Estudiantes</a></li>
            <li><a href="registroEstudiantes.php">Registrar Estudiante</a></li>
            <li><a href="editarEstudiante.php">Editar Estudiante</a></li>
            <li><a href="darDeBaja.php">Dar de Baja Estudiante</a></li>
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