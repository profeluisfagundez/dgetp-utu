<?php
    $nombres = $_POST['nombres'];
    $arregloNombres = explode(',', $nombres);
    array_push($arregloNombres, "Carlos", "Ana");
    echo "Arreglo final:<br>";
    print_r($arregloNombres);
?>