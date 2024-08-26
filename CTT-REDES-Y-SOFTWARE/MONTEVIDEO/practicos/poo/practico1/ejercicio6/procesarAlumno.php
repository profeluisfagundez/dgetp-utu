<?php
require_once 'Alumno.php';
session_start();

// Inicializar la colección de alumnos si no existe
if (!isset($_SESSION['alumnos'])) {
    $_SESSION['alumnos'] = [];
}

// Procesar la acción según el botón presionado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accion = $_POST['accion'] ?? '';
    
    if ($accion == 'agregarAlumno') {
        $nombre = $_POST['nombre'] ?? '';
        if (!empty($nombre) && !isset($_SESSION['alumnos'][$nombre])) {
            $_SESSION['alumnos'][$nombre] = new Alumno($nombre);
        }
    } elseif ($accion == 'agregarNota') {
        $nombreAlumno = $_POST['nombreAlumno'] ?? '';
        $nota = $_POST['nota'] ?? 0;
        if (isset($_SESSION['alumnos'][$nombreAlumno]) && is_numeric($nota)) {
            $_SESSION['alumnos'][$nombreAlumno]->agregarNota($nota);
        }
    }
}

// Redirigir de vuelta a index.php
header('Location: index.php');
exit();
?>
