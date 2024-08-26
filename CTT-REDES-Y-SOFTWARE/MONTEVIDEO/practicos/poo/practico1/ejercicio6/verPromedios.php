<?php
// Incluir el archivo de la clase Alumno
require_once 'Alumno.php';
session_start();

// Verifica que la sesión contenga la colección de alumnos
if (isset($_SESSION['alumnos'])) {
    $alumnos = $_SESSION['alumnos'];
} else {
    $alumnos = [];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Promedios</title>
    <link rel="stylesheet" href="verPromediosStyle.css">
</head>
<body>
    <h1>Promedios de Todos los Alumnos</h1>
    <?php if (!empty($alumnos)): ?>
        <ul>
            <?php foreach ($alumnos as $nombre => $alumno): ?>
                <li>
                    <h2><?php echo htmlspecialchars($nombre); ?></h2>
                    <?php echo $alumno->__toString(); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No hay alumnos registrados.</p>
    <?php endif; ?>
    <a href="index.php">Volver</a>
</body>
</html>
