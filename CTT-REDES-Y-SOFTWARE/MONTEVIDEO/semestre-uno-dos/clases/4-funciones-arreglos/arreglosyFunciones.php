<?php
//Declaramos un arreglo indexado
$arregloFrutas = ["Manzana","Pera","Uva","Banana","Frutilla"];

// Acceder a elementos del arreglo de manera manual
echo "La primera fruta es: " . $arregloFrutas[0] . "<br>";
echo "La última fruta es: " . $arregloFrutas[4] . "<br>";

// Recorrer el arreglo con un bucle foreach
echo "Lista de frutas: <br>";
foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";

array_push($arregloFrutas, "Mango");

foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";

$ultimaFruta = array_pop($arregloFrutas);
echo "El ultimo elemento es: " . $ultimaFruta . "<br>";
foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}