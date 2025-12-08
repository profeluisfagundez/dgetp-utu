<?php

echo "<h1>Array Simple</h1>";
echo "---------------";
echo "<br>";
#Array
//Es aquel elemento que no identificamos de manera directa.
#Array Simple
//Es aquel que no le hemos definido un Key o clave
$course = [
	'javascrip', 
	'laravel', 
	'php', 
	'vue'
];
echo '<pre>';
var_dump($course);
echo '</pre>';

//Array con Key o clave definida 
$courses = [
	'javascrip', 
	'laravel', 
	10 =>'php', 
	'vue'
];
echo '<pre>';
var_dump($courses);
echo '</pre>';
