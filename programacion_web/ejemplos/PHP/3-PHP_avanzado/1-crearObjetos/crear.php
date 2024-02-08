<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Persona creada</title>
</head>
<body>
    <?php
        require_once('Persona.php'); 
        $ci = $_POST['ci'];
        $nomb = $_POST['nombre'];
        $apell = $_POST['apellido'];
        $persona = new Persona($ci, $nomb, $apell);
        $valor = $persona->__toString();
        echo("<h2>Se ha creado la persona con los siguientes atributos:</h2>");
        echo("<p>$valor</p>");
    ?>
    <input type="button" onclick="history.back()" name="volver" value="volver atrás">
</body>
</html>