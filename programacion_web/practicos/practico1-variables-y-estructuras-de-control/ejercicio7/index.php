<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <section>
        <h1>Ejercicio 7</h1>
        <ul>
            <?php
            for ($numero = 20; $numero >= 0; $numero--) {
                // Operador ternario
                $etiqueta = ($numero % 2 == 0) ? "par" : "impar";
                echo "<li>$numero ($etiqueta)</li>";
            }
            /**
                if($numero % 2 == 0) {
                    return "par";
                }
                else {
                    return "impart";
                }
             */
            ?>
        </ul>
    </section>
</body>
</html>