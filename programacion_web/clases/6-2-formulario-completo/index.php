<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Registro de Usuario</h1>
    <form method="post" action="procesar.php">
        <table>
            <tr>
                <td><label for="nombre">Nombre:</label></td>
                <td><input type="text" name="nombre" id="nombre" required></td>
            </tr>
            <tr>
                <td><label for="apellido">Apellido:</label></td>
                <td><input type="text" name="apellido" id="apellido" required></td>
            </tr>
            <tr>
                <td><label for="telefono">Teléfono:</label></td>
                <td><input type="tel" name="telefono" id="telefono" required></td>
            </tr>
            <tr>
                <td><label for="fecha_nacimiento">Fecha de Nacimiento:</label></td>
                <td><input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required></td>
            </tr>
            <tr>
                <td><label for="sector_trabajo">Sector de Trabajo:</label></td>
                <td>
                    <select name="sector_trabajo" id="sector_trabajo" required>
                        <option value="IT">Tecnologías de la Información</option>
                        <option value="Salud">Ciencias de la salud</option>
                        <option value="Educación">Educación</option>
                        <option value="Finanzas">Economía y Finanzas</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>