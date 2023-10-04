<?php
    $name_of_file = $_FILES["image"]["name"];
    $image = $_FILES["image"]["tmp_name"];
    $route_of_save_file = "images/$name_of_file";
    move_uploaded_file($image, $route_of_save_file);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio de imagenes al servidor con persistentecia local</title>
    <style>
        * {
            margin: auto;
            padding: 0px;
        }
        h1{
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Imagen enviada desde el formulario</h1>
    <img src="<?= $route_of_save_file ?>" alt="<?= $name_of_file ?>">
</body>
</html>