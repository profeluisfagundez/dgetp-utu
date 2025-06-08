<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <section>
        <h1>Ejercicio 5</h1>
        <?php
        // Definir la función calcularDescuento
        function calcularDescuento($precio, $descuento) {
            $precioFinal = $precio - ($precio * ($descuento / 100));
            return $precioFinal;
        }

        // Precio del producto sin descuento
        $precioProducto = 100; // Cambia este valor según el precio del producto

        // Calcular el precio final con un descuento del 10%
        $descuento = 22; // 10% de descuento
        $precioFinalConDescuento = calcularDescuento($precioProducto, $descuento);

        // Mostrar el resultado
        echo "<p>Precio del producto sin descuento: $precioProducto USD</p>";
        echo "<p>Descuento del $descuento% aplicado</p>";
        echo "<p>Precio final con descuento: $precioFinalConDescuento USD</p>";
        ?>
    </section>
</body>
</html>
