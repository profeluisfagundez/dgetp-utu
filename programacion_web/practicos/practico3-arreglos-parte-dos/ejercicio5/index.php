<!DOCTYPE html>
<html>
<head>
    <title>Lista de Ciudades</title>
</head>
<body>
    <h1>Lista de Ciudades</h1>
    <ul>
        <?php
        // Definir un arreglo con nombres de ciudades
        $ciudades = array("Nueva York", "Los Ángeles", "Chicago", "Miami", "San Francisco");

        // Utilizar un bucle (por ejemplo, un bucle foreach) para mostrar las ciudades en una lista desordenada
        foreach ($ciudades as $ciudad) {
            echo "<li>$ciudad</li>";
        }
        ?>
    </ul>
</body>
</html>
