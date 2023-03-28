<?php

//Declaramos una variable con un valor
$sonidoAnimal = "cri-cri-cri!";

function realizaSonido(&$cat_dog) {
    $cat_dog = "Woof!";
}

realizaSonido($sonidoAnimal);

echo $sonidoAnimal;

echo "\n";

?>