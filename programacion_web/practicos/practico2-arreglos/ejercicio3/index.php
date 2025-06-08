<!DOCTYPE html>
<html>
<head>
    <title>Información de Persona</title>
</head>
<body>
    <h1>Información de Persona</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Ciudad</th>
        </tr>
        <?php
        // Definir un arreglo asociativo con información de la persona
        $persona = array(
            "nombre" => "Juan Pérez",
            "edad" => 30,
            "ciudad" => "México"
        );

        // Crear una fila en la tabla con los datos del arreglo
        echo "<tr>";
        echo "<td>" . $persona["nombre"] . "</td>";
        echo "<td>" . $persona["edad"] . "</td>";
        echo "<td>" . $persona["ciudad"] . "</td>";
        echo "</tr>";
        ?>
    </table>
</body>
</html>
