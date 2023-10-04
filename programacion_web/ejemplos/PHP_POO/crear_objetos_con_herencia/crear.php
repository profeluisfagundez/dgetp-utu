<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Médico creado</title>
</head>
<body>
    <?php
        require('Medico.php'); 
        $ci = $_POST['ci'];
        $nomb = $_POST['nombre'];
        $apell = $_POST['apellido'];
        $codArea = $_POST['codigoArea'];
        $especial = $_POST['especialidad'];
        $medico = new Medico($ci, $nomb, $apell, $codArea, $especial);
        $valor = $medico->toString();
        echo("<h2>Se ha creado el médico con los siguientes atributos:</h2>");
        echo("<p>$valor</p>");
    ?>
    <input type="button" onclick="history.back()" name="volver" value="volver atrás">
</body>
</html>