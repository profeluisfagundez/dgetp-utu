<?php

// 1. Crear dos arreglos con nombres de animales
$animales1 = ["Perro", "Gato", "Conejo"];
$animales2 = ["León", "Tigre", "Elefante"];

// 2. Combinar los arreglos
$animalesCombinados = array_merge($animales1, $animales2);

// 3. Mostrar el arreglo combinado
echo "Lista de animales combinada:<br>";

foreach ($animalesCombinados as $animal) {
    echo $animal . "<br>";
}

?>