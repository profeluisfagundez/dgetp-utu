<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <article>
        <h1>Ejercicio 9</h1>
        <?php
        // Inicializar variables
        $suma = 0;

        // Bucle for para generar y sumar 100 números aleatorios
        for ($contador = 0; $contador < 100; $contador++) {
            $numeroAleatorio = rand(1, 100); // Generar un número aleatorio entre 1 y 100
            $suma += $numeroAleatorio;
        }

        // Imprimir el resultado de la suma dentro del artículo
        echo "<p>La suma de los 100 números aleatorios es: $suma</p>";
        ?>
    </article>
</body>
</html>