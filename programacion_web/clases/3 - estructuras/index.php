<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estructuras en PHP</title>
</head>
<body>
    <?php 
        $nombre = "Luis";
        $edad = 30;
        $contador = 51;
        if($nombre == "Luis") {
            //Segunda condición del primer if
            //Control + D selecciona variables
            if ($edad == 30) {
                echo "<h1>Bienvenido $nombre</h1>";
                echo "Tenga cuidado, es población de riesgo";
            } else {
                echo "<h1>Bienvenido $nombre</h1>";
            } 
        } elseif ($nombre == "Carlos") {
            echo "<h1>Bienvenido Carlitos</h1>";
        } else {
            echo "<h1>Bienvenido Usuario anonimo</h1>";
        }
        //------------------------------------------------------
        //Ejemplos de usos: menú, opciones en general
        switch ($nombre) {
            case 'Luis':
                echo "<h2>Soy Luis pero del SWITCH</h2>";
                break;
            case 'Carlos':
                echo "<h2>Soy Carlos pero del SWITCH</h2>";
                break;
            default:
                echo "<h2>Bienvenido Usuario anonimo del Switch uwu</h2>";
                break;
        }
        //---------------------------------------------------------------
        for ($i = 1; $i <= 10; $i++) {
            //Contatenación
            //Cuando tengamos que recorrer arreglos
            echo "Hola " . $nombre . " " . $i . "<br >";
        }
        //----------------------------------------------------------------
        while ($contador <= 50) {
            //Instrucciones del código
            echo $contador . " ";
            $contador++;
        }
    ?>
</body>
</html>