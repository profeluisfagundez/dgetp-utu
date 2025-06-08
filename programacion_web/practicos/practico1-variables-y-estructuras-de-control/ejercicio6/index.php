<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <section>
        <h1>Ejercicio 6</h1>
        <?php
        $numero = 7; // valor de la tabla

        echo "<p>Tabla de multiplicar del $numero:</p>";
        echo "<ul>";

        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }

        echo "</ul>";
        ?>
    </section>
</body>
</html>