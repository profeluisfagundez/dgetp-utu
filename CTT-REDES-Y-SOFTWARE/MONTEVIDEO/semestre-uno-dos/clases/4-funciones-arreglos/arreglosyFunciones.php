<?php
//Declaramos un arreglo indexado
$arregloFrutas = ["Manzana","Pera","Uva","Banana","Frutilla"];
$nuevasFrutas = ["Kiwi", "Melon"];

// Acceder a elementos del arreglo de manera manual
echo "La primera fruta es: " . $arregloFrutas[0] . "<br>";
echo "La última fruta es: " . $arregloFrutas[4] . "<br>";

// Recorrer el arreglo con un bucle foreach
echo "Lista de frutas: <br>";
foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";

array_push($arregloFrutas, "Luis");

foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";

// Extrar el último elemento del array.
$ultimaFruta = array_pop($arregloFrutas);
echo "El ultimo elemento es: " . $ultimaFruta . "<br>";
foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}

echo "---------------------------------------------<br>";
// array_shift: Extraer el primer elemento del array.
$primeraFruta = array_shift($arregloFrutas);
echo "El primer elemento es: " . $primeraFruta . "<br>";
foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";

// array_unshift: Añadir uno o más elementos al inicio del array.
array_unshift($arregloFrutas, "Cereza", "Frutillita");
foreach ($arregloFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";
// array_merge: Combinar uno o más arrays.
$todasLasFrutas = array_merge($arregloFrutas, $nuevasFrutas);


//Explode: permite crear un arreglo en base a un separador en una variable
//Manzana Pera Banana Kiwi Limón 
$pizza  = "porción1 porción2 porción3 porción4 porción5 porción6";
$porciones = explode(" ", $pizza);
echo $porciones[0]; // porción1
echo $porciones[1]; // porción2
