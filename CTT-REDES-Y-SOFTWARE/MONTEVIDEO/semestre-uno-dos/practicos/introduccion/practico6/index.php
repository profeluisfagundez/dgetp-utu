<?php

$arreglo = [];
$numeroMayor = 0;
$numeroMenor = 100;
$suma = 0;
$sumaFinal = 0;

    for ($i=0; $i < 100 ; $i++) { 
        $arreglo[$i] = rand(1,100);
    }

    echo "VALORES DEL ARREGLO <br>";
    foreach($arreglo as $arre) {
        echo $arre . " ";
    }
    echo "<br>**********************************";

    foreach($arreglo as $arre) {
        if ($arre > $numeroMayor) {
            $numeroMayor = $arre;
        }
    }   

    echo "<br>El número mayor es: ".$numeroMayor."<br>";

    foreach($arreglo as $arre) {
        if ($arre < $numeroMenor) {
            $numeroMenor = $arre;
        }
    }   

    echo "<br>El número menor es: ".$numeroMenor."<br>";

    echo "<br>**********************************<br>";
    echo "PROMEDIO**********************************<br>";
    foreach($arreglo as $arre) {
        $suma = $suma + $arre;
    }
    $sumaFinal = $suma/count($arreglo);
    echo "El valor de la suma total es: $suma <br>";
    echo "El promedio de la suma es: $sumaFinal <br>"; 

?>