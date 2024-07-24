<?php 

echo "<h1> Funciones en PHP </h1>";
$valorUno = 15;
$valorDos = 20;

function sumar($numUno, $numDos):bool {
    $suma = $numUno + $numDos;
    if($suma >= 30) {
        return true;
    } else {
        return false;
    }
}

$suma = sumar($valorUno, $valorDos);
if ($suma == 1) {
    echo "El resultado es true";
} else {
    echo "El resultado es false";
}

function mostrarPruebaSoftware():void{
    echo "<h2>Esto es una versión de prueba</h2>";
    echo "<h3>Favor pague la versión final</h3>";
    echo "<h4>Necesito llegar a fin de mes</h4>";
}


?>