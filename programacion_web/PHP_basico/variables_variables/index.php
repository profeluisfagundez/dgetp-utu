<?php
/**
 * A veces es conveniente tener nombres de variables variables. Dicho de otro modo, 
 * son nombres de variables que se pueden definir y usar dinámicamente.
 * Una variable normal se establece con una sentencia como: 
 */
$variable = "nombre";
/**
 *Una variable variable toma el valor de una variable y lo trata como el nombre de una variable. 
 *En el ejemplo anterior, nombre, se puede usar como el nombre de una variable utilizando dos signos de dólar. 
 *Es decir: 
 */
$$variable = "Hola soy luis";
echo $nombre."<br>";
?>
