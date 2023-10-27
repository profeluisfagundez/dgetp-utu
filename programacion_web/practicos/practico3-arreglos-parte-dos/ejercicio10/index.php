<!DOCTYPE html>
<html>
<head>
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>
    
    <?php
    // Paso A: Crear un arreglo vacío llamado $compras que representará una lista de compras.
    $compras = array();

    // Paso B: Agregar elementos a la lista de compras utilizando los índices adecuados.
    $compras[0] = "Manzanas";
    $compras[1] = "Bananas";
    $compras[2] = "Arroz";
    $compras[3] = "Leche";
    $compras[4] = "Pan integral";

    // Paso C: Utilizar la función unset() para eliminar el elemento "Arroz" de la lista de compras.
    unset($compras[2]);

    // Paso D: Modificar el elemento en el índice 3 para que en lugar de "Leche" diga "Leche de almendras".
    $compras[3] = "Leche de almendras";

    // Paso E: Crear un bucle foreach que recorra el arreglo $compras y muestre cada elemento en una lista desordenada.
    echo "<ul>";
    foreach ($compras as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
