<?php

//Imprimimos los datos usando la función get_contents.
//echo file_get_contents("https://xkcd.com/info.0.json") . PHP_EOL;

$json = file_get_contents("https://xkcd.com/info.0.json") . PHP_EOL;

//echo "Acá se va imprimir directo <br>";
//var_dump($json);
//echo "<br>*************************************<br>";


$arregloAsociativo = json_decode($json, true);
echo "<pre>";
var_dump($arregloAsociativo);
echo "</pre>";
?>