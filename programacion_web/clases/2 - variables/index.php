<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdución a variables</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $nombre = "Luis";
    $nacimiento = "1992-12-21";
    $ciudad = "Tacuarembó";
    $trabaja = true;
    ?>
    <h1>Ejemplo de variables en PHP</h1>
    <h4>Comenzamos..</h4>
    <table>
        <tr>
            <th>Nombre del trabajador</th>
            <th>Fecha de nacimiento</th>
            <th>Ciudad</th>
            <th>Está trabajando?</th>
        </tr>
        <tr>
            <td> <?php echo $nombre ?> </td>
            <td> <?php echo $nacimiento ?> </td>
            <td> <?php echo $ciudad ?> </td>
            <td> 
                <?php
                    if($trabaja){
                        echo "Está trabajando actualmente";
                    }
                    else {
                        echo "No está trabajando actualmente";
                    }
                 ?> 
            </td>
        </tr>
    </table>
</body>

</html>