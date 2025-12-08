<!DOCTYPE html>
<html>
<head>
    <title>Operaciones con Arreglos</title>
</head>
<body>
    <h1>Operaciones con Arreglos</h1>
    
    <?php
    // Crear un arreglo vacío de números
    $numeros = array();

    // Agregar varios elementos al arreglo
    $numeros[] = 10;
    $numeros[] = 20;
    $numeros[] = 30;
    $numeros[] = 40;

    // Mostrar el arreglo antes de eliminar un elemento
    echo "<h2>Arreglo antes de eliminar un elemento:</h2>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";

    // Eliminar un elemento del arreglo (por ejemplo, el segundo elemento, que tiene índice 1)
    unset($numeros[1]);

    // Mostrar el arreglo después de eliminar un elemento
    echo "<h2>Arreglo después de eliminar un elemento:</h2>";
    echo "<pre>";
    print_r($numeros);
    echo "</pre>";
    ?>
</body>
</html>
