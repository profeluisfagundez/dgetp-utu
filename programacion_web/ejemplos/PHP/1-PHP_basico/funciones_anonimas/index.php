<?php

//Declaramos un arreglo con 4 valores
$numbers = [1,2,3,4];

//Usando una variable, recorremos el arreglo y creamos una función anonima para que lo recorra
//y multiplique su valor por dos
$numbers_by_2 = array_map(function($current){
    return $current * 2;
},$numbers);

echo "<pre>";
print_r($numbers_by_2);
echo "</pre>";
echo "<br>";

?>