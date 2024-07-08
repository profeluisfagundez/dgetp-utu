<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>

<body>
    <?php
        require_once '../app/funciones.php';
        verificarSesion();
    ?>
    <h1>Contacto</h1>
    <form action="../app/enviarEmail.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea><br><br>

        <input type="submit" value="Enviar">
    </form>
    <a href="../html/principal.html">Volver al menú principal</a>
</body>

</html>