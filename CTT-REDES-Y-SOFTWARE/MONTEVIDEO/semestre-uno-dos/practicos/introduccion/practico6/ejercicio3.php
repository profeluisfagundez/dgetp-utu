<?php
$arregloPersona = [
    ["Luis", "32", "Montevideo", "Tacuarembó"],
    ["Maria", "22", "Canelones", "Rocha"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad Actual</th>
            <th>Ciudad de Nacimiento</th>
        </tr>
        <?php
            foreach($arregloPersona as $valor) {
                echo "<td> $valor </td>";
            }
        ?> 
    </table>
</body>

</html>
