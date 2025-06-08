<?php
require_once("Persona.php");

$cedula = "48225577";
$primer_nombre = "Luis";
$primer_apellido = "Fagúndez";

//Creamos el objeto y llamamos al constructor para pasarle los parámetros
$profesor = new Persona($cedula, $primer_nombre, $primer_apellido);
echo $profesor->__toString();