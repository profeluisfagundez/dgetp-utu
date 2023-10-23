<!DOCTYPE html>
<html>
<head>
    <title>Respuesta del Formulario</title>
</head>
<body>
    <?php 
        if (isset($_GET["nombre"])) {
            $nombre = $_GET["nombre"];
        }
        if (isset($_GET["email"])) {
            $email = $_GET["email"];
        }
    ?>
    <p>Muy buenos días </p> <?php echo $nombre ?>
    <p>Su correo electronica es: </p> <?php echo $email ?>
</body>
</html>
