<?php
    $nombrecito = $_POST['nombres'];
    $arregloNombres = explode(',', $nombrecito);
    array_push($arregloNombres, "Juan", "Pedrito");
    echo "Arreglo final:<br>";
    print_r($arregloNombres);
?>