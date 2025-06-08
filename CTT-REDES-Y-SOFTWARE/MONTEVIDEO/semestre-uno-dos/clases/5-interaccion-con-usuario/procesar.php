<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo de la página</title>
</head>
<body>
    <h1>Datos ingresados por el usuario</h1>
    <br>
    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    echo "<p>El nombre es: $nombre, el apellido es: $apellido
    y su edad actual es: $edad</p>";
    ?>
</body>
</html>