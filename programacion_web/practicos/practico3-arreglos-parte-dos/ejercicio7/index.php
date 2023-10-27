<!DOCTYPE html>
<html>
<head>
    <title>Búsqueda en un Arreglo de Palabras</title>
</head>
<body>
    <h1>Búsqueda en un Arreglo de Palabras</h1>
    
    <?php
    // Crear un arreglo de palabras
    $palabras = array("manzana", "pera", "banana", "uva", "naranja");

    // Palabra específica que deseas buscar
    $palabra_a_buscar = "banana";

    // Utilizar la función in_array() para buscar la palabra en el arreglo
    if (in_array($palabra_a_buscar, $palabras)) {
        echo "La palabra '$palabra_a_buscar' se encontró en el arreglo.";
    } else {
        echo "La palabra '$palabra_a_buscar' no se encontró en el arreglo.";
    }
    ?>
</body>
</html>
