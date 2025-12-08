<?php

//Declaramos una variable con un valor
$sonidoAnimal = "cri-cri-cri!";

function realizaSonido(&$cat_dog) {
    $cat_dog = "Woof!";
}

realizaSonido($sonidoAnimal);

echo "<p>".$sonidoAnimal."</p>";

echo "<br>";

?>