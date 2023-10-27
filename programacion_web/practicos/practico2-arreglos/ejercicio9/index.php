<!DOCTYPE html>
<html>
<head>
    <title>Sumar Elementos en un Arreglo</title>
</head>
<body>
    <h1>Sumar Elementos en un Arreglo</h1>
    
    <?php
    // Crear un arreglo de números
    $numeros = array(10, 20, 30, 40, 50);

    // Inicializar una variable para almacenar la suma
    $suma = 0;

    // Utilizar un bucle foreach para sumar los elementos en el arreglo
    foreach ($numeros as $numero) {
        $suma += $numero;
    }

    // Mostrar la suma total
    echo "La suma total de los elementos es: $suma";
    ?>
</body>
</html>
