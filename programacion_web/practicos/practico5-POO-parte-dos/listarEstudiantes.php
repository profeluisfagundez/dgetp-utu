<?php
include 'includes/functions.php';
include 'includes/classes/Estudiante.php';
include 'includes/classes/Materia.php';

// Ruta al archivo que almacena la información de los estudiantes
$archivoEstudiantes = 'data/estudiantes.json';

// Inicializar arreglo de estudiantes
$estudiantes = cargarEstudiantesDesdeArchivo($archivoEstudiantes);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Listado de Estudiantes</title>
</head>

<body>
    <header>
        <h1>Listado de Estudiantes</h1>
    </header>

    <nav>
        <!-- Barra de navegación o menú -->
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
        <h2>Estudiantes Registrados</h2>

        <?php
        // Verificar si hay estudiantes para mostrar
        if (!empty($estudiantes)) {
            echo '<table border="1">';
            echo '<tr> <th>CI</th> <th>Nombre</th> <th>Apellido</th> <th>Fecha de Nacimiento</th> <th>Curso</th> <th>Materias</th> </tr>';
            // Recorrer el arreglo de estudiantes con un bucle foreach
            foreach ($estudiantes as $estudiante) {
                echo '<tr>';
                echo '<td>' . $estudiante['ci'] . '</td>';
                echo '<td>' . $estudiante['nombre'] . '</td>';
                echo '<td>' . $estudiante['apellido'] . '</td>';
                echo '<td>' . $estudiante['fechaNacimiento'] . '</td>';
                echo '<td>' . $estudiante['curso'] . '</td>';
                // Recorrer las materias del estudiante
                echo '<td>';
                foreach ($estudiante['materias'] as $materia) {
                    echo $materia['nombre'] . ': ' . $materia['nota'] . '<br>';
                }
                echo '</td>';
                echo '</tr>';
            }
            echo '</table>';
        } else {
            echo "No hay estudiantes registrados.";
        }
        ?>
    </main>

    <footer>
        <!-- Pie de página -->
    </footer>
</body>

</html>