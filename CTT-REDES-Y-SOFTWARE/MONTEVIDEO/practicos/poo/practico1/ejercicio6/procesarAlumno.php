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
    /*if (isset($_POST['accion'])){
        $accion = $_POST['accion'];
    } else {
        $_POST['accion'] = '';
    }*/
    
    //Accion = Variable que viene del formulario y puede tener dos valores
    // Valor1= agregarAlumno Valor2= agregarNota
    if ($accion == 'agregarAlumno') {
        /*$nombre = al valor que viene del formulario para 
        agregar un alumno y que en caso de que venga vacio con ??
        lo inicializamos en vacio */
        $nombre = $_POST['nombre'] ?? '';
        /*
        Verifica que $nombre que viene del formulario no sea vacio
        aparte con el operador && (AND 'Y'), pregunta si en el arreglo global
        $_SESSION existe un arreglo llamado alumnos y un indice con el nombre de la
        variable $nombre.
        */
        if (!empty($nombre) && !isset($_SESSION['alumnos'][$nombre])) {
            /*Si se cumplen las dos condiciones creo el indice con el
            valor de la variable $nombre y en ese indice almaceno el objeto
            Alumno que tiene por defecto el valor de el nombre ingresado en el 
            formulario por la persona
            arreglo = ['nombre','nombreDos','nombreTres']
            */
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
