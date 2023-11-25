<?php
include 'includes/functions.php';
include 'includes/classes/Estudiante.php';
include 'includes/classes/Materia.php';

// Ruta al archivo que almacena la información de los estudiantes
$archivoEstudiantes = 'data/estudiantes.json';

// Inicializar arreglo de estudiantes
$estudiantes = cargarEstudiantesDesdeArchivo($archivoEstudiantes);

// Mensajes de error
$error = '';
$exito = '';

// Procesar el formulario cuando se envíe
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $ci = $_POST['ci'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $curso = $_POST['curso'];

    // Validar datos
    if (empty($ci) || empty($nombre) || empty($apellido) || empty($fechaNacimiento) || empty($curso)) {
        $error = 'Todos los campos son obligatorios.';
    } else {
        // Crear objeto Estudiante
        $nuevoEstudiante = new Estudiante($ci, $nombre, $apellido, $fechaNacimiento, $curso);

        // Agregar materias 
        if (isset($_POST['materias'])) {
            foreach ($_POST['materias'] as $nombreMateria) {
                $nota = $_POST[$nombreMateria . '_nota'];
                $nuevoEstudiante->agregarMateria($nombreMateria, $nota);
            }
        }

        // Agregar estudiante al arreglo
        agregarEstudiante($estudiantes, $nuevoEstudiante);

        // Guardar estudiantes en el archivo
        guardarEstudiantesEnArchivo($archivoEstudiantes, $estudiantes);

        // Mensaje de éxito
        $exito = 'Estudiante registrado correctamente.';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Registro de Estudiantes</title>
</head>
<body>
    <header>
        <h1>Registro de Estudiantes</h1>
    </header>

    <nav>
        <!-- Barra de navegación -->
        <ul>
        <li><a href="index.php">Inicio</a></li>
            <li><a href="listarEstudiantes.php">Listar Estudiantes</a></li>
            <li><a href="registroEstudiantes.php">Registrar Estudiante</a></li>
            <li><a href="editarEstudiante.php">Editar Estudiante</a></li>
            <li><a href="darDeBaja.php">Dar de Baja Estudiante</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </nav>

    <main>
        <h2>Registrar Estudiante</h2>

        <?php
        // Mostrar mensajes de error o éxito al usuario
        if (!empty($error)) {
            echo '<p style="color: red;">' . $error . '</p>';
        }
        if (!empty($exito)) {
            echo '<p style="color: green;">' . $exito . '</p>';
        }
        ?>

        <!-- Formulario de registro -->
        <form action="registroEstudiantes.php" method="POST">
            <label for="ci">Cédula de Identidad:</label>
            <input type="text" name="ci" required>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" required>

            <label for="fechaNacimiento">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNacimiento" required>

            <label for="curso">Curso:</label>
            <input type="text" name="curso" required>

            <p>Materias:</p>
            <input type="checkbox" name="materias[]" value="Matematica"> Matemática
            <input type="number" name="Matematica_nota" placeholder="Nota">

            <input type="checkbox" name="materias[]" value="Historia"> Historia
            <input type="number" name="Historia_nota" placeholder="Nota">

            <button type="submit">Registrar</button>
        </form>
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
