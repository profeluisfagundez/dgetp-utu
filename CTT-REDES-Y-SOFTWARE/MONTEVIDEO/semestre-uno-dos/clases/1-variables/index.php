<?php
/*Variables en PHP
Una variable es un contenedor que almacena un valor o información que puede cambiar durante la ejecución
de un programa. Las variables tienen un nombre único que se utiliza para hacer referencia a ellas
y un tipo de datos que define qué tipo de valores pueden almacenar. 
En PHP, las variables se definen utilizando el signo de dólar ($) seguido del nombre de la variable. */

//Variables 
$entero = 12;
$cadena_de_texto = "nombre";
$caracter = "A";
echo "Valor del entero: ".$entero;
echo "<br>" ;
echo "Valor de la cadena: ".$cadena_de_texto;
echo "<br>" ;

//Constantes
define('pi', 3.1415926535);
echo (pi)."<br>";

echo "<pre>";
var_dump(pi);
var_dump($entero);
var_dump($cadena_de_texto);
var_dump($caracter);
echo "</pre>";
?>