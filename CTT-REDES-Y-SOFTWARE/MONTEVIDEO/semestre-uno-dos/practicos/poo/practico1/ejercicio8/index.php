<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Salario de Empleado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calcular Salario de Empleado</h1>
        <form action="procesarEmpleado.php" method="post">
            <label for="nombre">Nombre del Empleado:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="horasTrabajadas">Horas Trabajadas:</label>
            <input type="number" id="horasTrabajadas" name="horasTrabajadas" required>
            <label for="tarifaHora">Tarifa por Hora:</label>
            <input type="number" id="tarifaHora" name="tarifaHora" required>
            <input type="submit" value="Calcular Salario">
        </form>
    </div>
</body>
</html>
