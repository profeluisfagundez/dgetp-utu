<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pruebas de ciclos en PHP</title>

    <style>
        h1 {
            text-align: center;
        }
        table {
            margin: auto;
            text-align: center;
            border: solid;
        }
        tr, th, td {
            border: solid;
        }
    </style>

</head>

<body>
    <?php $var= ['44444444', 'Luis', 'Fagúndez', '099099099', 'Abajo de un puente']; ?>
    <h1>Recorriendo un array con el ciclo For</h1>
    <table>
        <tr>
            <th>CI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Celular</th>
            <th>Dirección</th>
        </tr>
        <tr>
            <?php for ($i=0; $i < sizeof($var) ; $i++): ?>
            <td> <?php echo $var[$i]; ?> </td>
            <?php endfor;?>
        </tr>
    </table>
</body>

</html>