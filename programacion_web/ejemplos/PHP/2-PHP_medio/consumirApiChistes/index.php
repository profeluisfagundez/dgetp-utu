<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver un chiste</title>
</head>
<body>
<?php
    $json = file_get_contents('https://xkcd.com/info.0.json');
    /*json_decode me permite convertir el contenido JSON a un arreglo de PHP, el segundo parámetro es necesario
    para indicarle a la función que lo codifique como un arreglo y no como un objeto.*/
    $arreglo = json_decode($json, true); 
    //En este caso le pido que me muestre solamente la url de la imagen del día
    echo $arreglo['img'].PHP_EOL;
?>
    <img src="<?php echo $arreglo['img'];?>" alt="media">
</body>
</html>