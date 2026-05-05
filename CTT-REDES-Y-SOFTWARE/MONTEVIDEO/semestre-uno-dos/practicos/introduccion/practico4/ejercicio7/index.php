<?php

$ciudades = ["Montevideo", "Buenos Aires", "Santiago", "Lima", "Asunción"];

array_splice($ciudades, 2, 1, "Bogotá");

echo "Arreglo después del reemplazo:<br>";
print_r($ciudades);

?>