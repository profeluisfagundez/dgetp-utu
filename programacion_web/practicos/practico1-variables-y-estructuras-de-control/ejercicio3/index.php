<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <section>
        <h1>Ejercicio 3</h1>
        <?php
        // Declarar variables base y altura
        $base = 8; // Cambia este valor según la base del triángulo
        $altura = 5; // Cambia este valor según la altura del triángulo

        // Calcular el área del triángulo
        $area = ($base * $altura) / 2;

        // Mostrar el resultado
        echo "<p>Base del triángulo: $base unidades</p>";
        echo "<p>Altura del triángulo: $altura unidades</p>";
        echo "<p>Área del triángulo: $area unidades cuadradas</p>";
        ?>
    </section>
</body>
</html>