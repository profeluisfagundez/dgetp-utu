<?php
/**
 * Carga los estudiantes desde un archivo y devuelve un array de estudiantes.
 * @param string $archivo La ruta al archivo que contiene los datos de los estudiantes.
 * @return array El array de estudiantes cargados desde el archivo, o un array vacío si el archivo no existe.
 */
function cargarEstudiantesDesdeArchivo($archivo) {
    if (file_exists($archivo)) {
        $contenido = file_get_contents($archivo);
        return json_decode($contenido, true);
    } else {
        return [];
    }
}

function guardarEstudiantesEnArchivo($archivo, $estudiantes) {
    $contenido = json_encode($estudiantes, JSON_PRETTY_PRINT);
    file_put_contents($archivo, $contenido);
}

function agregarEstudiante(&$estudiantes, $estudiante) {
    $estudiantes[$estudiante->ci] = $estudiante;
}

function obtenerEstudiantePorCI($estudiantes, $ci) {
    return isset($estudiantes[$ci]) ? $estudiantes[$ci] : null;
}

function editarEstudiante(&$estudiantes, $ci, $nuevosDatos) {
    if (isset($estudiantes[$ci])) {
        $estudiantes[$ci] = array_merge($estudiantes[$ci], $nuevosDatos);
    }
}

function darDeBajaEstudiante(&$estudiantes, $ci) {
    if (isset($estudiantes[$ci])) {
        unset($estudiantes[$ci]);
    }
}

function contarVisitas($archivoContador) {
    if (file_exists($archivoContador)) {
        $contador = (int)file_get_contents($archivoContador);
        $contador++;
        file_put_contents($archivoContador, $contador);
        return $contador;
    } else {
        file_put_contents($archivoContador, 1);
        return 1;
    }
}

?>
