<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de ingresos</title>
    <style>
        *{
            margin: auto;
            padding: 0px;
        }

        h1 {
            text-align: center;
            padding: 20px;
        }
        table {
            border: solid;
        }
        table, thead, tr, th {
            border: solid;
        }
        table, tbody, tr, td {
            border: solid;
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
            <?php
            /*
                *IMPORTANTE -> LA VARIABLE RESULTADOS VIENE EL CONTROLADOR AUTOMÁTICAMENTE 
                *Esto es gracias a que se carga desde el enruteador y se hace el require_once();
                */
            foreach ($resultados as $resultado) {
                echo "<tr>";
                echo "<td> ID en BD: " . $resultado['id'] . "</td>";
                echo "<td> Método de pago: " . $resultado['metodo_pago'] . "</td>";
                echo "<td> Tipo: " . $resultado['tipo'] . "</td>";
                echo "<td> Fecha de ingreso: " . $resultado['fecha_ingreso'] . "</td>";
                echo "<td> Cantidad: " . $resultado['cantidad'] . "</td>";
                echo "<td> Descripción: " . $resultado['descripcion'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>