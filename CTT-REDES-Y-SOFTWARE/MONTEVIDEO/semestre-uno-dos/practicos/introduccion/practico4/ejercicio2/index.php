<?php
$dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

$primerDia = array_shift($dias);
$ultimoDia = array_pop($dias);

echo "Primer día extraído: " . $primerDia . "<br>";
echo "Último día extraído: " . $ultimoDia . "<br><br>";

echo "Arreglo restante:<br>";
foreach ($dias as $dia) {
    echo $dia . "<br>";
}

$cantidad = count($dias);
echo "<br>Cantidad de elementos restantes: " . $cantidad;

?>