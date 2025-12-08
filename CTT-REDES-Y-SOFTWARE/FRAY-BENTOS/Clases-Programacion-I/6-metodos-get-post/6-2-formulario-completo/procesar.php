<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesamiento de Registro</title>
    <link rel="stylesheet" href="procesarStyle.css">
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $sector_trabajo = $_POST['sector_trabajo'];
    ?>
    <h1>Registro Exitoso</h1>
    <table>
        <tr>
            <td><strong>Nombre:</strong></td>
            <td><?php echo "$nombre $apellido"; ?></td>
        </tr>
        <tr>
            <td><strong>Teléfono:</strong></td>
            <td><?php echo $telefono; ?></td>
        </tr>
        <tr>
            <td><strong>Fecha de Nacimiento:</strong></td>
            <td><?php echo $fecha_nacimiento; ?></td>
        </tr>
        <tr>
            <td><strong>Sector de Trabajo:</strong></td>
            <td><?php echo $sector_trabajo; ?></td>
        </tr>
    </table>
    <?php
    } else {
        echo "<h1>Error en el Registro</h1>";
        echo "<p class='error'>No se han enviado datos válidos.</p>";
    }
    ?>
</body>
</html>
