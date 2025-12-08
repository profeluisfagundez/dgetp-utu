<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elminar un Retiro en el sistema</title>
    <link rel="stylesheet" href="/css/deleteStyle.css">
</head>

<body>
    <header>
        <h1>Elminar un Retiro en el sistema</h1>
    </header>
    <form method="post">
        <!--Nuestro RouterHandler espera que le indiquemos que tipo de método
            va a usar, por eso creamos un input hidden con el valor POST-->
        <input type="hidden" name="_method" id="_method" value="DELETE">
        <label for="eliminarIDRetiro">Eliminar un Retiro por ID:</label>
        <input type="number" name="id" id="eliminarIDRetiro" required>
        <input type="submit" value="Eliminar">
    </form>
    <form action="<?php echo "/"; ?>" method="post">
        <input type="submit" value="INICIO">
    </form>
</body>

</html>