<?php
//Todas las funciones fueron extraidas de la web oficial:
// https://www.php.net/manual/es/ref.array.php

//Funciones básicas para trabajar con PHP vanilla
$edades = [18, 25, 11, 33, 42, 15];

//count = Cuenta la cantidad de elemtnos que tiene un arreglo
echo count($edades)."\n";

//array_push = Me permite cargar al final un valor a un arreglo
array_push($edades, 13);

//La función var_dump me permite inspeccionar un elemento
var_dump($edades);
echo "\n"; 

//is_array = me permite saber si un dato es un arreglo
$frutas = "Manzana";
var_dump(is_array($frutas));
echo "\n"; 

//explode = de una lista genera un arreglo usando un separador
$lista_de_personas = "Luis,Maria,Carla,Marcos,Manuel,Fiorella";
$lista_de_personas_array = explode(",", $lista_de_personas);
var_dump($lista_de_personas_array);
echo "\n";

//implode = es el opuesto a explode, de un arreglo genera un string
$arreglo_de_personas = ["Luis","Maria","Carla","Marcos","Manuel","Fiorella"];
$arreglo_de_personas_lista = implode(",", $arreglo_de_personas);
var_dump($arreglo_de_personas_lista);
echo "\n";

?>