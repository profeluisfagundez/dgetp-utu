<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase sobre arreglos</title>
</head>
<body>
    <?php
        //Sintaxis simplificada
        $arreglito = [15, 12, 14, 23, 44,02];
        //Sintaxis completa
        $arreglitoBonito = array(15,12,14,23,44,02);
        var_dump($arreglito);
        echo "<br>";
        var_dump($arreglitoBonito);
        //Arreglo con clave
        $arregloConClave = array (
            "Uno" => "Walter",
            "Dos" => "Lucía",
            "Tres" => "Sra Duarte"
        );
        echo "<br>";
        var_dump($arregloConClave);
        //Acceder a la posición del arreglo
        echo "<br>";
        echo "El valor de la posición Uno es: " . $arregloConClave["Uno"] . "<br>";
        echo "El valor de la posición 3 es: ". $arreglitoBonito[3];
        //*************************************************/
        $arregloConClave["Tres"] = "Jenifer"; 
        echo "<br>";
        var_dump($arregloConClave);
        //*************************************************/
        foreach($arreglitoBonito as $arre){
            echo "El valor es :" . $arre . "<br> ";
        }
        //*************************************************/
        unset($arregloConClave["Tres"]);
        echo "<br >";
        var_dump($arregloConClave);
    ?>
</body>
</html>