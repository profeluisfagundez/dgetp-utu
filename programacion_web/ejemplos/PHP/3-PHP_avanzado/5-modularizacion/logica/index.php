<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acá creamos a los gatos</title>
    <?php 
        require_once("../Clases/gatosDisponibles/Gato.php");
        require_once("../Clases/gatosAdoptados/Gato.php");
    ?>
</head>
<body>
    <h1>Crear un gatito</h1>
    <?php 
        $gatitoUno = new GatosDisponibles\Gato("Jose","verde","15");
        $gatitoDos = new GatosAdoptados\Gato("Pedrito","15","Sergio");
        $texto = $gatitoUno->maullar();
        $textoDos = $gatitoDos->maullar();
        echo "<p>Gato disponible: $texto</p>";
        echo "<p>Gato disponible: $textoDos</p>";
    ?>
</body>
</html>