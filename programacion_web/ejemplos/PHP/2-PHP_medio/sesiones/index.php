<?php

session_start()
/**
 *QUÉ SON LAS SESIONES?
 *Son muy similares en concepto a las cookies, pero estas nos permiten implementar un 
 *sistema de autenticación dentro de nuestro sitio web. 
 *Se puede decir que una sesión es una cookie temporal é encriptada que estará viva 
 *y contendrá toda la información del usuario mientras esté activa.
 *Las sesiones se destruyen cuando el usuario realiza un logout. Con las sesiones 
 *podemos tener información especifica del usuario para personalizar el contenido
 *La forma de usar sesiones en php es mediante el uso de la función session_start(),
 *es necesario incluirla en todos los archivos que necesitemos trabajar con sesiones.
 *La variable superglobal que estaremos trabajando será $_SESSION, esta almacena los 
 *datos de la sesión. En pocas palabras $_SESSION es un arreglo con información
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de sesiones con PHP</title>
</head>
<body>
    <?php if (isset($_SESSION["id"])): ?>
        <h1>Bienvenido <?= $_SESSION["username"]; ?> </h1>
    <?php else: ?>
        <h1>No has iniciado sesión aún</h1>
    <?php endif; ?>
</body>
</html>