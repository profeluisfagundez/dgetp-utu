<?php

$arregloFrutas = ["Manzana","Pera","Uva","Banana","Frutilla"];

echo "Fruta: " . $arregloFrutas[0] . "<br>";
echo "Fruta: " . $arregloFrutas[1] . "<br>";
echo "Fruta: " . $arregloFrutas[2] . "<br>";
echo "Fruta: " . $arregloFrutas[3] . "<br>";
echo "Fruta: " . $arregloFrutas[4] . "<br>";

echo "<hr>";

//Recorrer el arreglo usando la estructura foreach
//La variable $fruta toma el valor de cada elemento del arreglo en cada iteración
foreach($arregloFrutas as $fruta){ 
    echo $fruta . "<br>";
}

//funciones ya diseñadas por PHP para trabajar con arreglos
array_push($arregloFrutas, "Mango");

echo "<hr>";

foreach($arregloFrutas as $fruta){ 
    echo $fruta . "<br>";
}

echo "<hr>";

$ultimaFruta = array_pop($arregloFrutas);

foreach($arregloFrutas as $fruta){ 
    echo $fruta . "<br>";
}

echo "El elemento eliminiado fue: " . $ultimaFruta . "<br>";


echo "<hr>";

$primeraFrutaEliminada = array_shift($arregloFrutas);
echo "El elemento eliminiado fue: " . $primeraFrutaEliminada . "<br>";

echo "<hr>";

//Agregar elementos al inicio del arreglo
array_unshift($arregloFrutas, "Cereza", "Kiwi", "Melón");

foreach($arregloFrutas as $fruta){ 
    echo $fruta . "<br>";
}

echo "<hr>";

$nuevasFrutas = ["Kiwicito", "Meloncito"];
$todasLasFrutas = array_merge($arregloFrutas, $nuevasFrutas);

echo "<hr>";
foreach($todasLasFrutas as $fruta){ 
    echo $fruta . "<br>";
}

echo "<hr>";

$frutasReverso = array_reverse($todasLasFrutas);

foreach($frutasReverso as $fruta){ 
    echo $fruta . "<br>";
}

?>