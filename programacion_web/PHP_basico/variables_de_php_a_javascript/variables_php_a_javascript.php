<?php
$usuarios = array(
    array(
        "id" => 0,
        "username" => "Luis"
    ),
    array(
        "id" => 1,
        "username" => "Eduardo"
    ),
    array(
        "id" => 2,
        "username" => "José"
    ),
);

$variable_con_edad = 12;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables de PHP a JavaScript</title>
</head>

<body>

    <script>
        let usuarios = JSON.parse('<?= json_encode($usuarios) ?>');
        let edad = <?= $variable_con_edad ?>;
    </script>

    <script src="./index.js"></script>

</body>

</html>