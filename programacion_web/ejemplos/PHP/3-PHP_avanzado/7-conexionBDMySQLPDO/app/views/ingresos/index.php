<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingresos</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
