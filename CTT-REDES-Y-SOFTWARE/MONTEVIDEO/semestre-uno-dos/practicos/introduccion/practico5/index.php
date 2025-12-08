<!DOCTYPE html>
<html>

<head>
    <title>Ejercicios PHP con While</title>
</head>

<body>
    <h1>Solución de los ejercicios en PHP usando While</h1>

    <?php
    // 1) Imprimir los números del 1 al 10.
    echo "<h2>1) Números del 1 al 10:</h2>";
    $i = 1;
    while ($i <= 10) {
        echo $i . " ";
        $i++;
    }
    //Salto de linea
    echo "<br>";

    // 2) Imprimir los números pares del 1 al 20.
    echo "<h2>2) Números pares del 1 al 20:</h2>";
    $i = 1;
    while ($i <= 20) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
        $i++;
    }
    echo "<br>";

    // 3) Calcular la suma de los primeros 100 números naturales.
    echo "<h2>3) Suma de los primeros 100 números naturales:</h2>";
    $suma = 0;
    $i = 1;
    while ($i <= 100) {
        //+= sumar el valor de la variable en el lado izquierdo con el valor del lado derecho y luego asignar el resultado
        // Esto es igual a $suma = $suma + $i
        $suma += $i;
        $i++;
    }
    echo $suma . "<br>";

    // 4) Imprimir los primeros 10 números de la serie Fibonacci.
    /* La serie de Fibonacci es una secuencia de números en la que cada número es la suma de los dos anteriores. 
    Comienza típicamente con los números 0 y 1 */
    echo "<h2>4) Primeros 10 números de la serie Fibonacci:</h2>";
    $fibonacci = [0, 1];
    $i = 2;
    while ($i < 10) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        $i++;
    }
    echo implode(" ", $fibonacci) . "<br>";

    // 5) Calcular el factorial de un número dado.
    $numero = 5; // Estimados, este número lo cambian por el que ustedes quieran calcular el factorial.
    echo "<h2>5) Factorial de $numero:</h2>";
    $factorial = 1;
    $i = 1;
    while ($i <= $numero) {
        $factorial *= $i;
        $i++;
    }
    echo $factorial . "<br>";

    // 6) Imprimir la tabla de multiplicar del 5.
    echo "<h2>6) Tabla de multiplicar del 5:</h2>";
    $i = 1;
    while ($i <= 10) {
        echo "5 x $i = " . (5 * $i) . "<br>";
        $i++;
    }

    // 7) Contar el número de dígitos en un número dado.
    $numero = 12345; // número aleatorio para los dígitos
    echo "<h2>7) Número de dígitos en $numero:</h2>";
    $count = 0;
    $temp = $numero;
    while ($temp != 0) {
        $temp = intval($temp / 10);
        $count++;
    }
    echo $count . "<br>";

    // 8) Imprimir los números del 10 al 1 en orden descendente.
    echo "<h2>8) Números del 10 al 1 en orden descendente:</h2>";
    $i = 10;
    while ($i >= 1) {
        echo $i . " ";
        $i--;
    }
    echo "<br>";

    // 9) Calcular la potencia de un número dado.
    $base = 2; //
    $exponente = 3; //
    echo "<h2>9) $base elevado a la $exponente:</h2>";
    $resultado = 1;
    $i = 0;
    while ($i < $exponente) {
        $resultado *= $base;
        $i++;
    }
    echo $resultado . "<br>";

    // 10) Encontrar el máximo común divisor (MCD) de dos números.
    $a = 56;
    $b = 98;
    echo "<h2>10) MCD de $a y $b:</h2>";
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    echo $a . "<br>";
    ?>
</body>

</html>