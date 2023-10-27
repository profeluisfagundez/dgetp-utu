<!DOCTYPE html>
<html>
<head>
    <title>Ordenar Arreglo de Números</title>
</head>
<body>
    <h1>Ordenar Arreglo de Números</h1>
    
    <?php
    // Crear un arreglo de números desordenados
    $numeros = array(7, 2, 5, 1, 9, 3);

    // Mostrar el arreglo antes de ordenar
    echo "<h2>Arreglo antes de ordenar:</h2>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    // Utilizar la función sort() para ordenar el arreglo de manera ascendente
    sort($numeros);

    // Mostrar el arreglo después de ordenar
    echo "<h2>Arreglo ordenado de manera ascendente:</h2>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";
    ?>
</body>
</html>
