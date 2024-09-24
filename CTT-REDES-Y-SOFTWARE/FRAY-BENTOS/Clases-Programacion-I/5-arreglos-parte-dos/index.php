<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos parte dos</title>
</head>

<body>
    <?php
    echo "<hr >";
    echo "<h3> Arreglo desordenado ^w^ </h3>";
    for ($i = 0; $i <= 100; $i++) {
        $arreglo[] = rand(1, 100);
        echo $arreglo[$i] . " ";
    }
    echo "<hr >";
    echo "<h3> Arreglo ordenado -_- </h3>";
    //Método burbuja
    for ($i = 0; $i <= 100; $i++) {
        for ($j = 0; $j < 100 - $i; $j++) {
            if ($arreglo[$j] > $arreglo[$j + 1]) {
                $temp = $arreglo[$j];
                $arreglo[$j] = $arreglo[$j + 1];
                $arreglo[$j + 1] = $temp;
            }
        }
    }
    for ($i = 0; $i <= 100; $i++) {
        echo $arreglo[$i] . " ";
    }
    echo "<hr>";
    $menor = $arreglo[0];
    foreach ($arreglo as $numero) {
        if ($numero < $menor) {
            $menor = $numero;
        }
    }
    echo "El elemento menor del arreglo es: $menor";
    echo "<hr>";
    $mayor = $arreglo[0];
    foreach ($arreglo as $numero) {
        if ($numero > $mayor) {
            $mayor = $numero;
        }
    }
    echo "El elemento mayor del arreglo es: $mayor";
    echo "<hr>";
    
    $suma = 0;
    foreach ($arreglo as $numero) {
        $suma += $numero;
    }
    $cantidad_elementos = 0;
    foreach ($arreglo as $numero) {
        $cantidad_elementos++;
    }
    $promedio = $suma / $cantidad_elementos;
    echo "El promedio de los elementos en el arreglo es: $promedio";
    echo "<hr>";
    ?>

</body>

</html>