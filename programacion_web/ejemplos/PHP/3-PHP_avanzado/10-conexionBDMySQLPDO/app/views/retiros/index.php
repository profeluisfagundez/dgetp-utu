<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de retiro</title>
    <link rel="stylesheet" href='/css/indexStyle.css'>
</head>

<body>
    <header>
        <h1>Lista de retiros en el sistema</h1>
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
            <?php foreach ($resultados as $resultado): ?>
                <tr>
                    <td>ID en BD: <?php echo $resultado['id']; ?></td>
                    <td>Método de pago: <?php echo $resultado['metodo_pago']; ?></td>
                    <td>Tipo: <?php echo $resultado['tipo']; ?></td>
                    <td>Fecha de retiro: <?php echo $resultado['fecha_retiro']; ?></td>
                    <td>Cantidad: <?php echo $resultado['cantidad']; ?></td>
                    <td>Descripción: <?php echo $resultado['descripcion']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <form action="<?php echo "/"; ?>" method="post">
        <input type="submit" value="INICIO">
    </form>
</body>

</html>
