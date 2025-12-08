<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <section>
        <h1>Ejercicio 2</h1>
        <?php
        // Declarar la variable $numero y asignarle un valor numérico
        $numero = 16; // Cambia este valor según el número que desees verificar

        // Determinar si el número es par o impar
        if ($numero % 2 == 0) {
            echo "<p>El número $numero es Par.</p>";
        } else {
            echo "<p>El número $numero es Impar.</p>";
        }
        ?>
    </section>
</body>
</html>