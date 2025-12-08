<?php
require_once("PersonaDos.php"); 

$nombre = "Maria";
$apellido = "Perez";
$cedula = "48225576";

$maria = new PersonaDos($nombre, $apellido, $cedula);
echo $maria->caminar();
echo "<br >";
echo $maria->saltar();
echo "<br >";
echo $maria->__toString();

















//$cedula = "48225577";
//$primer_nombre = "Luis";
//$primer_apellido = "Fagúndez";

//$profeLuis = new PersonaDos($primer_nombre, $primer_apellido, $cedula);
//echo $profeLuis->retornarNombre() . "<br>";
//$profeLuis->apellido = "Hernandez";
//echo "$profeLuis->apellido <br>";
//echo "$profeLuis->cedula <br>";
//echo $profeLuis->caminar() . "<br>";



