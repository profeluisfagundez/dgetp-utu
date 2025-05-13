<?php

// Definición de variables entero, booleano, String, Flotante
$variableEntera = 10; // Entero
$variableBooleano = true; // Booleano
$variableString = "Hola Mundo"; // String
$variableFlotante = 10.5; // Flotante

//echo "Variable Entera: $variableEntera <br>";
//echo "Variable Booleano: $variableBooleano <br>";
//echo "Variable String: $variableString <br>";
//echo "Variable Flotante: $variableFlotante <br>";

//var_dump($variableEntera);
//echo "<br>";
//var_dump($variableBooleano);
//echo "<br>";
//var_dump($variableString);
//echo "<br>";
//var_dump($variableFlotante);
//echo "<br>";

//****************************************************************
//if ($variableEntera <= 8) {
//    echo "El valor de la variable es menor o igual a 10 <br>";
//}

//if ($variableBooleano == true) {
//    echo "El valor de la variable es: true<br>";
//} else {
//    echo "El valor de la variable es: false<br>";
//}

//Dada dos variables enteras, mostrar el mayor de los dos
//$numero1 = 10;
//$numero2 = 20;
//if ($numero1 > $numero2) {
//    echo "El mayor es: $numero1 <br>";
//} else {
//    echo "El mayor es: $numero2 <br>";
//}

//Estructura de control for
//for ($i = 0; $i <= 10; $i++) {
//    echo "El valor de i es: $i <br>";
//}

// < menor que
// > mayor que
// <= menor o igual que
// >= mayor o igual que
// == igual que
// === igual que y del mismo tipo
// != diferente que

$arregloDePalabras = ['Pedro', 'Jose', 'Maikol', 'Maria', 'Pepito'];
//var_dump($arregloDePalabras);
//echo "<br>";
//echo "Posición 2: ";
//echo $arregloDePalabras[2];
//echo "<br>";

//foreach ($arregloDePalabras as $indice){
//    echo "Palabra: $indice <br>";
//}

echo count($arregloDePalabras);
echo "<br>";

for($i = 0; $i < count($arregloDePalabras); $i++){
    echo "Palabra: $arregloDePalabras[$i] <br>";
}

