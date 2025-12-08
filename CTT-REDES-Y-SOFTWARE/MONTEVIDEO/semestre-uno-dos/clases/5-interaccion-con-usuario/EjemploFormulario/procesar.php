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
        $nombreUno = $_POST['nombre'];
        $edadUno = $_POST['edad'];
        echo "<p>El nombre ingresado fue: $nombreUno </p>";
        echo  "<p> y la edad fue: $edad</p><br>"; 
    ?>
</body>
</html>
