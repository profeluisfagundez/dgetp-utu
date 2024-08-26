<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salario final</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once 'Empleado.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $horasTrabajadas = $_POST['horasTrabajadas'];
        $tarifaHora = $_POST['tarifaHora'];

        $empleado = new Empleado($nombre, $horasTrabajadas, $tarifaHora);
        $salario = $empleado->calcularSalario();

        // https://www.php.net/manual/es/function.htmlspecialchars.php
        echo "<h1>Salario Calculado</h1>";
        echo "<p>Nombre del Empleado: " . htmlspecialchars($empleado->getNombre()) . "</p>";
        echo "<p>Horas Trabajadas: " . htmlspecialchars($empleado->getHorasTrabajadas()) . "</p>";
        echo "<p>Tarifa por Hora: $" . htmlspecialchars($empleado->getTarifaHora()) . "</p>";
        echo "<p><strong>Salario Total: $" . htmlspecialchars($salario) . "</strong></p>";
    }
    ?>
</body>

</html>