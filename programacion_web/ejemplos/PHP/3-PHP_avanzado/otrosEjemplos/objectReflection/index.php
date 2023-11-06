<?php

require_once('Persona.php');

$persona = new Persona("Juan", 30, "Ingeniero");

$reflexion = new ReflectionClass($persona);

$propiedades = $reflexion->getProperties();
echo "Propiedades de la clase Persona:<br>";
foreach ($propiedades as $propiedad) {
  echo $propiedad->getName() . "<br>";
}

echo "<br>";

$metodos = $reflexion->getMethods();
echo "Métodos de la clase Persona:<br>";
foreach ($metodos as $metodo) {
  echo $metodo->getName() . "<br>";
}

?>