<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del retiro</title>
    <link rel="stylesheet" href='/css/indexStyle.css'>
</head>

<body>
    <header>
        <h1>Datos del retiro con el ID: <?php echo $resultados['id']; ?></h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Método de pago</th>
                <th>Tipo</th>
                <th>Fecha de retiro</th>
                <th>Cantidad</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID en BD: <?php echo $resultados['id']; ?></td>
                <td>Método de pago: <?php echo $resultados['metodo_pago']; ?></td>
                <td>Tipo: <?php echo $resultados['tipo']; ?></td>
                <td>Fecha de retiro: <?php echo $resultados['fecha_retiro']; ?></td>
                <td>Cantidad: <?php echo $resultados['cantidad']; ?></td>
                <td>Descripción: <?php echo $resultados['descripcion']; ?></td>
            </tr>
        </tbody>
    </table>
    <form action="<?php echo "/"; ?>" method="post">
        <input type="submit" value="Ir a la Página de Destino">
    </form>
</body>

</html>