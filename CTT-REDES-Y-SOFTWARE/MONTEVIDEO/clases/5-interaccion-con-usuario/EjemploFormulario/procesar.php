<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saludo de la página</title>
</head>
<body>
    <h1>Datos ingresados por el usuario</h1>
    <br>
    <?php 
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        echo "<p>El nombre ingresado fue: $nombre y la edad fue: $edad</p><br>"; 
    ?>
</body>
</html>
