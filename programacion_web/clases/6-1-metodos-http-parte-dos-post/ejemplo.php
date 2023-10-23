<!DOCTYPE html>
<html>
<head>
    <title>Respuesta del Formulario</title>
</head>
<body>
    <?php
        $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
        $email = isset($_POST["email"]) ? $_POST["email"] : "";
    ?>
    <p>Muy buenos días, <?php echo $nombre; ?></p>
    <p>Su correo electrónico es: <?php echo $email; ?></p>
</body>
</html>