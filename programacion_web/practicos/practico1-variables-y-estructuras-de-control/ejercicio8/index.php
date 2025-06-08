<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <section>
        <h1>Ejercicio 8</h1>
        <?php
        // Inicializar variables
        $numero = 1;
        $suma = 0;

        // Bucle while para sumar los números del 1 al 100
        while ($numero <= 100) {
            $suma += $numero;
            $numero++;
        }

        // Imprimir el resultado de la suma
        echo "<p>La suma de los números del 1 al 100 es: $suma</p>";
        ?>
    </section>
</body>
</html>