<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Trabajadores cargados en el sistema:</h1>
    <?php
    session_start();
    require_once 'config.php';
    require_once 'funciones.php';
    // Mostrar todos los trabajadores
    foreach ($_SESSION['trabajadores'] as $trabajador) {
        echo "Nombre: " . htmlspecialchars($trabajador['nombre']) . "<br>";
        echo "Posición: " . htmlspecialchars($trabajador['posicion']) . "<br>";
        echo "Email: " . htmlspecialchars($trabajador['email']) . "<br><br>";
    }
    ?>
    <a href="../html/principal.html">Volver al menú principal</a>
</body>

</html>