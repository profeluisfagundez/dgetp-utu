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

// array_push: Añadir uno o más elementos al final de un array.
array_push($arregloFrutas, "Mango");

// array_pop: Extraer el último elemento del final del array.
$ultimaFruta = array_pop($arregloFrutas);
echo "El ultimo elemento es: " . $ultimaFruta . "<br>";

// array_shift: Extraer el primer elemento del array.
$primeraFruta = array_shift($arregloFrutas);
echo "El primer elemento es: " . $primeraFruta . "<br>";

// array_unshift: Añadir uno o más elementos al inicio del array.
array_unshift($arregloFrutas, "Cereza");

// array_merge: Combinar uno o más arrays.
$nuevasFrutas = ["Kiwi", "Melon"];
$todasLasFrutas = array_merge($arregloFrutas, $nuevasFrutas);
// Recorremos nuevamente
echo "Lista de frutas: <br>";
foreach ($todasLasFrutas as $fruta) {
    echo $fruta . "<br>";
}
echo "---------------------------------------------<br>";

// array_slice: Extraer una porción del array.
$porcion = array_slice($arregloFrutas, 1, 3);
var_dump($porcion);
echo "<br>";

// array_splice: Eliminar una porción del array y reemplazar con otros elementos.
array_splice($arregloFrutas, 2, 1, ["Durazno"]);

// array_reverse: Retorna el array en orden inverso.
$frutasReverso = array_reverse($arregloFrutas);
var_dump($frutasReverso);
echo "<br>";

// count: Cuenta todos los elementos en un array.
$numeroDeFrutas = count($arregloFrutas);
echo "$numeroDeFrutas <br>";

// in_array: Comprueba si un valor existe en el array.
$existe = in_array("Uva", $arregloFrutas);
echo "$existe <br>";

// sort: Ordena un array en orden ascendente.
sort($arregloFrutas);

// rsort: Ordena un array en orden descendente.
rsort($arregloFrutas);

?>