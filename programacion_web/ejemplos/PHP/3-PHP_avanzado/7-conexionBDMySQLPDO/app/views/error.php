<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #e44d26;
        }

        .btn-home {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
        $errorMessage = $_GET['message'] ?? 'Ha ocurrido un error.';
    ?>
    <h1>¡Ups! Algo salió mal.</h1>
    <p><?php echo $errorMessage; ?></p>

    <a href="/" class="btn-home">Volver al Inicio</a>
</body>

</html>