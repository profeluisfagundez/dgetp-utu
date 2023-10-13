<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>

<body>
    <?php
    $numeroDia = 3; // Cambia este valor para probar diferentes días (1 a 7)
    switch ($numeroDia) {
        case 1:
            $nombreDia = "Lunes";
            break;
        case 2:
            $nombreDia = "Martes";
            break;
        case 3:
            $nombreDia = "Miércoles";
            break;
        case 4:
            $nombreDia = "Jueves";
            break;
        case 5:
            $nombreDia = "Viernes";
            break;
        case 6:
            $nombreDia = "Sábado";
            break;
        case 7:
            $nombreDia = "Domingo";
            break;
        default:
            $nombreDia = "Día no válido";
    }
    echo "El número $numeroDia corresponde a $nombreDia.";
    ?>

</body>

</html>