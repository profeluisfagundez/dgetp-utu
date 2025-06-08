<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="indexStyle.css">
</head>

<body>
    <!--DATOS IMPORTES
        Este archivo maneja varios formularios juntos dentro de un archivo index
        La idea principal es que exista una variable llamada accion que nos permita
        dependiendo del contenido procesar la información -->
    <h1>Gestión de Alumnos</h1>

    <!-- Formulario para agregar un alumno -->
    <form method="POST" action="procesarAlumno.php">
        <label for="nombre">Nombre del Alumno:</label>
        <input type="text" id="nombre" name="nombre" required>
        <button type="submit" name="accion" value="agregarAlumno">Agregar Alumno</button>
    </form>

    <h2>Agregar Nota a un Alumno</h2>

    <!-- Formulario para agregar una nota -->
    <form method="POST" action="procesarAlumno.php">
        <label for="nombreAlumno">Seleccione Alumno:</label>
        <select id="nombreAlumno" name="nombreAlumno" required>
            <option value="">Seleccione</option>
            <?php
            /*Cuando se agrega un alumno y se envia la información al archivo procesarAlumno.php
            Al volver al archivo index.php se ejecuta esta parte del código y se cargan los alumnos
            que ya estén dados de alta en el arreglo alumnos en el arreglo superglobal de $_SESSION
            */
            require_once 'Alumno.php';
            session_start();
            if (isset($_SESSION['alumnos'])) {
                foreach ($_SESSION['alumnos'] as $nombre => $alumno) {
                    echo "<option value=\"$nombre\">$nombre</option>";
                }
            }
            ?>
        </select>

        <label for="nota">Nota:</label>
        <input type="number" id="nota" name="nota" step="0.01" required>
        <button type="submit" name="accion" value="agregarNota">Agregar Nota</button>
    </form>

    <h2>Ver Promedios de Alumnos</h2>
    <form method="GET" action="verPromedios.php">
        <button type="submit">Ver Promedios</button>
    </form>

    <h2>Eliminar Todos los Alumnos</h2>
    <form method="POST" action="destruirAlumnos.php">
        <button type="submit">Eliminar Todos</button>
    </form>
</body>

</html>