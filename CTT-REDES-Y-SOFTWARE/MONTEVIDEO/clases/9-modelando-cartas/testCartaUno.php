<?php
require_once("Carta.php");
require_once("Mazo.php");
$carta = new Carta(2,12);
$cartaDos = new Carta(2,11);
echo $carta->__toString();
echo $cartaDos->__toString();
echo "<hr>";

/*for ($i = 0; $i < 4; $i++) {
    for ($j = 1; $j <= 12; $j++) {
        $carta = new Carta($i, $j);
        echo $carta->__toString();
    }
}*/
$mazo = new Mazo();
$mazo->mostrarMazo();

?>
