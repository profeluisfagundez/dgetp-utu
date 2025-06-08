<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <section>
        <h1>Ejercicio 4</h1>
        <?php
        // Definir la función devolverSuma
        function devolverSuma($numero1, $numero2) {
            $suma = $numero1 + $numero2;
            return $suma;
        }

        // Variables con números
        $numero1 = 10;
        $numero2 = 20;

        // Llamar a la función devolverSuma y almacenar el resultado
        $resultadoSuma = devolverSuma($numero1, $numero2);

        // Mostrar el resultado
        echo "<p>La suma de $numero1 y $numero2 es: $resultadoSuma</p>";
        ?>
    </section>
</body>
</html>