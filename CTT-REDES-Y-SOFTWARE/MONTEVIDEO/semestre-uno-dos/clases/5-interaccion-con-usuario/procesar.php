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
        echo  "<p> El nombre es: $nombreUno</p><br>"; 
    ?>
</body>
</html>