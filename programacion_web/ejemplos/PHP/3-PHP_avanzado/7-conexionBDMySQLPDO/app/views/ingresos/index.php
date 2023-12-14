<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingresos</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #4caf50;
    color: white;
}

tr:hover {
    background-color: #f5f5f5;
}
    </style>
</head>

<body>
    <header>
        <h1>Lista de ingresos en el sistema</h1>
    </header>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Método de pago</th>
                <th>Tipo</th>
                <th>Fecha de ingreso</th>
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
                    <td>Fecha de ingreso: <?php echo $resultado['fecha_ingreso']; ?></td>
                    <td>Cantidad: <?php echo $resultado['cantidad']; ?></td>
                    <td>Descripción: <?php echo $resultado['descripcion']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>
